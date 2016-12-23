#pragma once

#include <iostream>
#include <sstream>
#include <queue>
#include <vector>
#include <stack>
#include <assert.h>

#include "Token.hpp"
#include "TokenList.hpp"
#include "Lexer.hpp"
#include "../ast/AstIncludes.hpp"

#include "../symbol/Table.hpp"

#include "exceptions/SyntaxException.hpp"

#define TODO(p)					\
    printf ("[!] Unimplement token : %s\n", p);	\
    exit (-1);

namespace nyx {
    class Syntax {
    public:
	Syntax(Lexer & lex);
	~Syntax();

	ast::Ast * getAst() const;

	TokenPtr pop() const;
	void rewind (int count = 1);

	/* Visitor */
	ast::Bloc * visitBloc ();
	ast::Ast * visitInstruction ();
	ast::Ast * visitFunDecl (TokenPtr token_type, TokenPtr token_ident);
	ast::Ast * visitFunCall (TokenPtr token_ident);
	std::vector <ast::VarDecl*> * visitParamsDecl ();
	ast::Bloc * visitVarDecl (TokenPtr token_type, TokenPtr token_ident);
	ast::Ast * visitVarAssign (TokenPtr token_ident, TokenPtr token_op);
	ast::Ast * visitIfElse ();
	ast::Ast * visitPrintI ();
	ast::Ast * visitFor ();
	ast::Ast * visitWhile ();
	ast::Ast * visitSyscall (TokenPtr token_ident);
	std::vector<ast::Expression*> * visitParams ();
	ast::Ast * visitReturn ();
	ast::Ast * visitBreak ();
	ast::Ast * visitImport ();

	ast::Expression * visitExpression ();
	ast::Expression * visitLow ();
	ast::Expression * visitLow (ast::Expression * left);
	ast::Expression * visitHigh ();
	ast::Expression * visitHigh (ast::Expression * left);
	ast::Expression * visitHHigh ();
	ast::Expression * visitHHigh (ast::Expression * left);
	ast::Expression * visitLeft ();
	ast::Expression * visitConst ();
	ast::Expression * visitIdent ();
	ast::Expression * visitIdent (TokenPtr token_ident);
	ast::Expression * visitUnaryOp ();
	ast::Expression * visitFloat ();
	ast::Expression * visitInt ();
	ast::Expression * visitString ();
	ast::Expression * visitChar ();
	ast::Expression * visitBool ();
	ast::Expression * visitArray ();

	bool find (TokenType type, std::vector <TokenType> list);

    private:
	Lexer & m_lex;
	ast::Bloc * m_program;

	symbol::Table * m_table;
    };
};
