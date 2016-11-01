#pragma once

#include <iostream>
#include "Ast.hpp"
#include "Expression.hpp"
#include "Position.hpp"
#include "Type.hpp"
#include "../symbol/Table.hpp"
#include "../symbol/Symbol.hpp"

namespace bob {
    namespace ast {
	class VarId : public Expression {
	public:
	    VarId(std::string name, Position * pos);
	    ~VarId();

	    Expression * interpret_expr();
	    std::string to_string() const;
	    Type * get_type() const;

	    std::string name;
	};
    };
};
