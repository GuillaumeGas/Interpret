#pragma once

/* TokenList example
#define LEX_TOKEN_LIST				\
    LEX_TOKEN (EXAMPLE_1, "ex1")		\
    // The lexer need theses following tokens !
    LEX_TOKEN (_EOF_, "<lex::eof>")		\
    LEX_TOKEN (OTHER, "<lex::other>")
*/

#define LEX_TOKEN_LIST				\
    LEX_TOKEN (PLUS, "+")			\
    LEX_TOKEN (PLUSPLUS, "++")			\
    LEX_TOKEN (MINUX, "-")			\
    LEX_TOKEN (MINUSMINUS, "--")		\
    LEX_TOKEN (MUL, "*")			\
    LEX_TOKEN (DIV, "/")			\
    LEX_TOKEN (MOD, "%")			\
    LEX_TOKEN (MODEQ, "%=")			\
    LEX_TOKEN (LT, "<")				\
    LEX_TOKEN (LE, "<=")			\
    LEX_TOKEN (GT, ">")				\
    LEX_TOKEN (GE, ">=")			\
    LEX_TOKEN (EQ, "==")			\
    LEX_TOKEN (NE, "!=")			\
    LEX_TOKEN (PAR_L, "(")			\
    LEX_TOKEN (PAR_R, ")")			\
    LEX_TOKEN (ASSIGN, "=")			\
    LEX_TOKEN (PLUSEQ, "+=")			\
    LEX_TOKEN (MINUSEQ, "-=")			\
    LEX_TOKEN (MULEQ, "*=")			\
    LEX_TOKEN (DIVEQ, "/=")			\
    LEX_TOKEN (ACCOL_L, "{")			\
    LEX_TOKEN (ACCOL_R, "}")			\
    LEX_TOKEN (SEMICOLON, ";")			\
    LEX_TOKEN (COMMA, ",")			\
    LEX_TOKEN (COLON, ":")			\
    LEX_TOKEN (POINT, ".")			\
    LEX_TOKEN (IF, "if")			\
    LEX_TOKEN (ELSE, "else")			\
    LEX_TOKEN (WHILE, "while")			\
    LEX_TOKEN (DO, "do")			\
    LEX_TOKEN (FOR, "for")			\
    LEX_TOKEN (RETURN, "return")		\
    LEX_TOKEN (BREAK, "break")			\
    LEX_TOKEN (IN, "in")			\
    LEX_TOKEN (DOLLAR, "$")			\
    LEX_TOKEN (SPACE, " ")			\
    LEX_TOKEN (COM_L, "/*")			\
    LEX_TOKEN (COM_R, "*/")			\
    LEX_TOKEN (COM_SIMPLE, "//")		\
    LEX_TOKEN (CR, "\n")			\
    LEX_TOKEN (_EOF_, "<lex::eof>")		\
    LEX_TOKEN (OTHER, "<lex::other>")
