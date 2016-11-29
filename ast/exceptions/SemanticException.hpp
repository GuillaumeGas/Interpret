#pragma once

#include <iostream>
#include "../Position.hpp"
#include "../Expression.hpp"
#include "../Operator.hpp"
#include "../Type.hpp"
#include "../../global/Global.hpp"

namespace nyx {
    class SemanticException {
    public:
	SemanticException(ast::Position * pos) throw() : file_name(Global::getInstance()->file_name), pos(pos) {}
	SemanticException(ast::Position * pos, std::string msg) throw() : file_name(Global::getInstance()->file_name), pos(pos), msg(msg) {}

	virtual std::string toString() const {
	    return "[Error] Semantic error in file " + file_name + " at " + pos->toString() + ".\n" + Global::getInstance()->getLine(pos->line);
	}

    protected:
	std::string file_name;
	ast::Position * pos;
	std::string msg;
    };

    class TypeErrorException : public SemanticException {
    public:
	TypeErrorException(ast::Expression * e1, ast::Expression * e2, ast::Position * pos) throw() : t1(e1->type), t2(e2->type), SemanticException(pos) {}
	TypeErrorException(ast::Type * t1, ast::Type * t2, ast::Position * pos) throw() : t1(t1), t2(t2), SemanticException(pos) {}

	std::string toString() const {
	    return "[Error] Incompatible types in file " + file_name + " at " + pos->toString() + " : " + t1->toString() + " with " + t2->toString() + ".\n    " + Global::getInstance()->getLine(pos->line);
	}

    protected:
	ast::Type * t1;
	ast::Type * t2;
    };
};
