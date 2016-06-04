#pragma once

#include <iostream>
#include <vector>

#include "Ast.hpp"

namespace bob {
  namespace ast {
    class Program : public Ast {
    public:
      Program();
      ~Program();

      std::string to_string() const;

      std::vector<Ast*> content;
    };
  };
};
