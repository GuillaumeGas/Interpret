#include <iostream>

#include "Compilo.hpp"

using namespace std;

int main(int argc, char** argv) {

  if(argc > 1) {
    Compilo c;
    c.compile(argv[1]);
    c.print_tokens();
  } else {
    cout << "[Error] no source file." << endl;
  }

  return 0;
}
