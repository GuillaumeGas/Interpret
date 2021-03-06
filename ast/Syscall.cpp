#include "Syscall.hpp"

using namespace std;
using namespace nyx;
using namespace ast;

Syscall::Syscall (string ident, vector<ExpressionPtr> * params, Position * pos) : Instruction (pos) {
    _ident = ident;
    _params = params;
}

Syscall::~Syscall () {
    if (_params)
    	delete _params;
}

void Syscall::interpret () {
    if (_ident == "print") {
    	sysPrint ();
    } else if (_ident == "println") {
    	sysPrintln ();
    } else {
    	throw SemanticErrorException ("Unknown syscall !", _pos);
    }
}

void Syscall::print (ostream & out, int offset) const {
    shift (out, offset);
    out << "syscall<" << _ident << "> (";
    if (_params != NULL) {
	int i = 0;
	for (auto it : *_params) {
	    it->print (out);
	    if (i < _params->size () - 1)
		out << ", ";
	    ++i;
	}
    }
    out << ")";
}

void Syscall::_sysPrint (ExpressionPtr e) {
    vector<ExpressionPtr> * vec = NULL;
    RangePtr range;

    if (e->getType ()->value == TYPE::ARRAY || e->getType ()->value == TYPE::RANGE)
    	cout << "[";

    switch (e->getType ()->value) {
    case TYPE::INT:
    	cout << e->getInt ();
    	break;
    case TYPE::CHAR:
    	cout << e->getChar ();
    	break;
    case TYPE::BOOL:
    	cout << e->getBool ();
    	break;
    case TYPE::FLOAT:
    	cout << e->getFloat ();
    	break;
    case TYPE::STRING:
    	vec = e->getArray ();
    	for (auto it : *vec) {
    	    _sysPrint (it);
    	}
    	break;
    case TYPE::ARRAY:
    	vec = e->getArray ();
    	for (int i = 0; i < vec->size (); i++) {
    	    ExpressionPtr obj = (*vec)[i]->interpretExpression ();
    	    _sysPrint (obj);
    	    if (i < vec->size () - 1)
    		cout << ", ";
    	}
    	break;
    case TYPE::RANGE:
    	cout << e->getRangeBegin ()->getInt ();
    	cout << " .. ";
    	cout << e->getRangeEnd ()->getInt ();
    	break;
    default:
    	SemanticErrorException ("Unknown type " + e->getType ()->toString () + "!", _pos);
    }

    if (e->getType ()->value == TYPE::ARRAY || e->getType ()->value == TYPE::RANGE)
    	cout << "]";
}

void Syscall::sysPrint () {
    for (auto it : *_params) {
    	_sysPrint (it->interpretExpression ());
    }
}

void Syscall::sysPrintln () {
    for (auto it : *_params) {
    	_sysPrint (it->interpretExpression ());
    }
    cout << endl;
}

std::string Syscall::getIdent () const {
    return _ident;
}

void Syscall::setIdent (const std::string & ident) {
    _ident = ident;
}

std::vector<ExpressionPtr> * Syscall::getParams () const {
    return _params;
}

void Syscall::setParams (std::vector<ExpressionPtr> * params) {
    _params = params;
}
