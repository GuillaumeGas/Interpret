#pragma once

#include <iostream>
#include <vector>

enum TokenType {
  NUM,
  CHAR,
  STRING,
  IDENT,
  TYPE,
  ASSIGN,
  PLUS,
  MINUS,
  MUL,
  DIV,
  MOD,
  LT,  // '<'
  LE, // '<='
  GT,  // '>'
  GE, // '>='
  EQ,  // '=='
  NE, // '!='
  PAR_L, // '('
  PAR_R, // ')'
  ACCOL_R, // '{'
  ACCOL_L, // '}'
  SEMICOLON, // ';'
  IF,
  ELSE,
  ELSEIF,
  WHILE,
  DO,
  FOR,
  PRINT_I,
  PRINT_S,
  SCAN_I,
  SCAN_S,
  TRUE,
  FALSE
};

struct TokenValue {
  virtual std::string to_string() const = 0;
};

struct TokenIntValue : TokenValue {
  TokenIntValue(int i);

  std::string to_string() const;

  int value;
};
struct TokenCharValue : TokenValue  {
  TokenCharValue(char c);

  std::string to_string() const;

  char value;
};
struct TokenStringValue : TokenValue  {
  TokenStringValue(std::string& s);

  std::string to_string() const;

  std::string value;
};

struct Token {
  Token(TokenType t, int v, unsigned int l);
  Token(TokenType t, char c, unsigned int l);
  Token(TokenType t, std::string& s, unsigned int l);
  ~Token();

  std::string to_string() const;
  std::string tokenType_to_string() const;

  TokenType type;
  TokenValue * value;

  unsigned int line;

  static Token* create(std::string& token, unsigned int line);
  static bool is_type(std::string& t);
  static bool is_ident(std::string& t);
  static bool is_assign(std::string& t);
  static bool is_number(std::string& t);
  static bool is_semicolon(std::string& t);

  static bool is_char(std::string& t);
  static bool is_string(std::string& t);
  static bool is_plus(std::string& t);
  static bool is_minus(std::string& t);
  static bool is_mul(std::string& t);
  static bool is_div(std::string& t);
  static bool is_mod(std::string& t);
  static bool is_lt(std::string& t);
  static bool is_le(std::string& t);
  static bool is_gt(std::string& t);
  static bool is_ge(std::string& t);
  static bool is_eq(std::string& t);
  static bool is_ne(std::string& t);
  static bool is_par_l(std::string& t);
  static bool is_par_r(std::string& t);
  static bool is_accol_l(std::string& t);
  static bool is_accol_r(std::string& t);
  static bool is_if(std::string& t);
  static bool is_else(std::string& t);
  static bool is_elseif(std::string& t);
  static bool is_do(std::string& t);
  static bool is_for(std::string& t);
  static bool is_while(std::string& t);
  static bool is_print_i(std::string& t);
  static bool is_print_s(std::string& t);
  static bool is_scan_i(std::string& t);
  static bool is_scan_s(std::string& t);
  static bool is_true(std::string& t);
  static bool is_false(std::string& t);
};
