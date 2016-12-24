#include "Class.hpp"

using namespace std;
using namespace nyx;
using namespace ast;

Class::Class (string & ident, FunDecl * constructor, FunDecl * destructor, Bloc * public_bloc, Bloc * private_bloc, Position * pos) {
    this->ident = ident;
    this->inheritance = "";
    this->constructor = constructor;
    this->destructor = destructor;
    this->public_bloc = public_bloc;
    this->private_bloc = private_bloc;
}

Class::Class (string & ident, string & inheritance, FunDecl * constructor, FunDecl * destructor, Bloc * public_bloc, Bloc * private_bloc, Position * pos) {
    this->ident = ident;
    this->inheritance = inheritance;
    this->constructor = constructor;
    this->destructor = destructor;
    this->public_bloc = public_bloc;
    this->private_bloc = private_bloc;
}

Class::~Class () {
    if (constructor)
	delete constructor;
    if (destructor)
	delete destructor;
    if (public_bloc)
	delete public_bloc;
    if (private_bloc)
	delete private_bloc;
}

void Class::interpret () {}

void Class::print (ostream & out, int offset) const {
    shift (out, offset);
    out << "<class " << ident;
    if (inheritance.size () > 0)
	out << " : " << inheritance;
    out << ">" << endl;
    offset += 2;
    if (public_bloc) {
	shift (out, offset);
	out << "public { " << endl;
	public_bloc->print (out, offset + 2);
	shift (out, offset);
	out << "}" << endl;
    }
    if (private_bloc) {
	shift (out, offset);
	out << "private {" << endl;
	private_bloc->print (out, offset + INDENT);
	shift (out, offset);
	out << "}" << endl;
    }
    out << "}";
}