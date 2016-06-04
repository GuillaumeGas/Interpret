#pragma once

#include "Expression.hpp"
#include "../Syntax.hpp"
#include "../Token.hpp"
#include "../exceptions/SyntaxException.hpp"
#include "../../ast/PrintI.hpp"
#include "../../ast/Position.hpp"
#include "../../ast/Expression.hpp"

namespace bob {
  namespace syntax {
    class PrintI {
    public:
      static void analyze(Syntax * syntax, Token * token);
    };
  };
};
