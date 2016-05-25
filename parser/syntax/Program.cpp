#include "Program.hpp"
#include "../Syntax.hpp"

using namespace syntax;
using namespace std;

void Program::analyze(Syntax * syntax, unsigned int index) {
  Token * t = syntax->get_token(index);
  switch (t->type) {
  case TokenType::TYPE:
    Type::analyze(syntax, index);
    break;
  default:
    cout << "Syntax error line " << t->line << endl;
  }
}
