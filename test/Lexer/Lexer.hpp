#pragma once

#include <iostream>
#include <cstdio>
#include <vector>

#include "Token.hpp"

class Lexer {
public:
    Lexer (std::string file_name);
    ~Lexer ();

    void setKeys (std::vector<std::string> keys);
    void setSkips (std::vector<std::string> skips);
    void setComs (std::vector<std::pair<std::string, std::string> > coms);
    Token next ();
    bool isEof () const;
    void rewind ();

private:
    bool isSkip (Token t) const;
    Token isCom (Token t) const;
    Token getWord ();
    Token getWord (int index);
    void getLine (std::string & line);
    void mfseek (const std::string & tok, unsigned int offset);

    std::string file_name;
    FILE * file;
    location_t current_loc;
    int current_index;
    std::vector<Token> current_line;
    bool eof;
    std::vector<std::string> keys;
    std::vector<std::string> skips;
    std::vector<std::pair<std::string, std::string> > coms;
};
