<?php

/*
 * Generated from Scedel.g4 by ANTLR 4.13.2
 */

namespace Scedel\Generated {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class ScedelParser extends Parser
	{
		public const DurationLiteral = 1, StringLiteral = 2, VersionLiteral = 3, 
               UnsignedInt = 4, NumberLiteral = 5, RegexLiteral = 6, LineComment = 7, 
               BlockComment = 8, WS = 9, AT = 10, LBRACE = 11, RBRACE = 12, 
               LPAREN = 13, RPAREN = 14, LBRACK = 15, RBRACK = 16, COLON = 17, 
               COMMA = 18, PIPE = 19, AMP = 20, QMARK = 21, EQUAL = 22, 
               NOT_EQUAL = 23, LESS = 24, MOR = 25, LESS_OR_EQUAL = 26, 
               MORE_OR_EQUAL = 27, PLUS = 28, MINUS = 29, STAR = 30, SLASH = 31, 
               DOT = 32, SCedelVersionKw = 33, INCLUDE = 34, TYPE = 35, 
               VALIDATOR = 36, ABSENT = 37, DEFAULT = 38, NULL = 39, DICT = 40, 
               WHEN = 41, THEN = 42, ELSE = 43, MATCHES = 44, AND = 45, 
               OR = 46, NOT = 47, THIS = 48, PARENT = 49, ROOT = 50, ON = 51, 
               TRUE = 52, FALSE = 53, VariableIdentifier = 54, Identifier = 55;

		public const RULE_file = 0, RULE_versionDirective = 1, RULE_fileItem = 2, 
               RULE_annotatedDecl = 3, RULE_decl = 4, RULE_includeStatement = 5, 
               RULE_inlineAnnotation = 6, RULE_targetedAnnotationStatement = 7, 
               RULE_annotationKey = 8, RULE_annotationTarget = 9, RULE_typeDeclaration = 10, 
               RULE_validatorDeclaration = 11, RULE_typeExpr = 12, RULE_unionExpr = 13, 
               RULE_intersectExpr = 14, RULE_postfixExpr = 15, RULE_nullableSuffix = 16, 
               RULE_absentKw = 17, RULE_atomExpr = 18, RULE_nullableBaseOrId = 19, 
               RULE_arraySuffix = 20, RULE_recordType = 21, RULE_fieldList = 22, 
               RULE_fieldDecl = 23, RULE_field = 24, RULE_defaultExpr = 25, 
               RULE_nullKw = 26, RULE_dictKw = 27, RULE_dictType = 28, RULE_whenKw = 29, 
               RULE_thenKw = 30, RULE_elseKw = 31, RULE_conditionalType = 32, 
               RULE_condExpr = 33, RULE_predicate = 34, RULE_matchesKw = 35, 
               RULE_andKw = 36, RULE_orKw = 37, RULE_notKw = 38, RULE_predicateOrExpr = 39, 
               RULE_predicateAndExpr = 40, RULE_predicateNotExpr = 41, RULE_predicatePrimaryExpr = 42, 
               RULE_expression = 43, RULE_additiveExpr = 44, RULE_multiplicativeExpr = 45, 
               RULE_unaryExpr = 46, RULE_valueExpr = 47, RULE_functionCall = 48, 
               RULE_expressionList = 49, RULE_emptyArrayExpr = 50, RULE_thisKw = 51, 
               RULE_parentKw = 52, RULE_rootKw = 53, RULE_path = 54, RULE_compareOp = 55, 
               RULE_paramList = 56, RULE_param = 57, RULE_validatorBody = 58, 
               RULE_constraintList = 59, RULE_constraint = 60, RULE_constraintCallArgList = 61, 
               RULE_constraintCallArg = 62, RULE_argValue = 63, RULE_trueKw = 64, 
               RULE_falseKw = 65, RULE_literal = 66, RULE_identifier = 67, 
               RULE_scedelVersionKw = 68, RULE_includeKw = 69, RULE_typeKw = 70, 
               RULE_validatorKw = 71, RULE_onKw = 72;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'file', 'versionDirective', 'fileItem', 'annotatedDecl', 'decl', 'includeStatement', 
			'inlineAnnotation', 'targetedAnnotationStatement', 'annotationKey', 'annotationTarget', 
			'typeDeclaration', 'validatorDeclaration', 'typeExpr', 'unionExpr', 'intersectExpr', 
			'postfixExpr', 'nullableSuffix', 'absentKw', 'atomExpr', 'nullableBaseOrId', 
			'arraySuffix', 'recordType', 'fieldList', 'fieldDecl', 'field', 'defaultExpr', 
			'nullKw', 'dictKw', 'dictType', 'whenKw', 'thenKw', 'elseKw', 'conditionalType', 
			'condExpr', 'predicate', 'matchesKw', 'andKw', 'orKw', 'notKw', 'predicateOrExpr', 
			'predicateAndExpr', 'predicateNotExpr', 'predicatePrimaryExpr', 'expression', 
			'additiveExpr', 'multiplicativeExpr', 'unaryExpr', 'valueExpr', 'functionCall', 
			'expressionList', 'emptyArrayExpr', 'thisKw', 'parentKw', 'rootKw', 'path', 
			'compareOp', 'paramList', 'param', 'validatorBody', 'constraintList', 
			'constraint', 'constraintCallArgList', 'constraintCallArg', 'argValue', 
			'trueKw', 'falseKw', 'literal', 'identifier', 'scedelVersionKw', 'includeKw', 
			'typeKw', 'validatorKw', 'onKw'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, "'@'", 
		    "'{'", "'}'", "'('", "')'", "'['", "']'", "':'", "','", "'|'", "'&'", 
		    "'?'", "'='", "'!='", "'<'", "'>'", "'<='", "'>='", "'+'", "'-'", 
		    "'*'", "'/'", "'.'", "'scedel-version'", "'include'", "'type'", "'validator'", 
		    "'absent'", "'default'", "'null'", "'dict'", "'when'", "'then'", "'else'", 
		    "'matches'", "'and'", "'or'", "'not'", "'this'", "'parent'", "'root'", 
		    "'on'", "'true'", "'false'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, "DurationLiteral", "StringLiteral", "VersionLiteral", "UnsignedInt", 
		    "NumberLiteral", "RegexLiteral", "LineComment", "BlockComment", "WS", 
		    "AT", "LBRACE", "RBRACE", "LPAREN", "RPAREN", "LBRACK", "RBRACK", 
		    "COLON", "COMMA", "PIPE", "AMP", "QMARK", "EQUAL", "NOT_EQUAL", "LESS", 
		    "MOR", "LESS_OR_EQUAL", "MORE_OR_EQUAL", "PLUS", "MINUS", "STAR", 
		    "SLASH", "DOT", "SCedelVersionKw", "INCLUDE", "TYPE", "VALIDATOR", 
		    "ABSENT", "DEFAULT", "NULL", "DICT", "WHEN", "THEN", "ELSE", "MATCHES", 
		    "AND", "OR", "NOT", "THIS", "PARENT", "ROOT", "ON", "TRUE", "FALSE", 
		    "VariableIdentifier", "Identifier"
		];

		private const SERIALIZED_ATN =
			[4, 1, 55, 600, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 2, 46, 7, 46, 2, 47, 7, 47, 
		    2, 48, 7, 48, 2, 49, 7, 49, 2, 50, 7, 50, 2, 51, 7, 51, 2, 52, 7, 
		    52, 2, 53, 7, 53, 2, 54, 7, 54, 2, 55, 7, 55, 2, 56, 7, 56, 2, 57, 
		    7, 57, 2, 58, 7, 58, 2, 59, 7, 59, 2, 60, 7, 60, 2, 61, 7, 61, 2, 
		    62, 7, 62, 2, 63, 7, 63, 2, 64, 7, 64, 2, 65, 7, 65, 2, 66, 7, 66, 
		    2, 67, 7, 67, 2, 68, 7, 68, 2, 69, 7, 69, 2, 70, 7, 70, 2, 71, 7, 
		    71, 2, 72, 7, 72, 1, 0, 3, 0, 148, 8, 0, 1, 0, 5, 0, 151, 8, 0, 10, 
		    0, 12, 0, 154, 9, 0, 1, 0, 5, 0, 157, 8, 0, 10, 0, 12, 0, 160, 9, 
		    0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 2, 1, 2, 3, 2, 169, 8, 2, 1, 3, 
		    5, 3, 172, 8, 3, 10, 3, 12, 3, 175, 9, 3, 1, 3, 1, 3, 1, 4, 1, 4, 
		    3, 4, 181, 8, 4, 1, 5, 1, 5, 1, 5, 1, 6, 1, 6, 1, 6, 1, 6, 3, 6, 190, 
		    8, 6, 1, 7, 1, 7, 1, 7, 1, 7, 3, 7, 196, 8, 7, 1, 7, 1, 7, 1, 7, 1, 
		    8, 1, 8, 1, 8, 5, 8, 204, 8, 8, 10, 8, 12, 8, 207, 9, 8, 1, 9, 1, 
		    9, 1, 9, 1, 9, 1, 9, 1, 9, 5, 9, 215, 8, 9, 10, 9, 12, 9, 218, 9, 
		    9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 1, 9, 5, 9, 226, 8, 9, 10, 9, 12, 
		    9, 229, 9, 9, 1, 9, 1, 9, 3, 9, 233, 8, 9, 1, 10, 1, 10, 1, 10, 1, 
		    10, 1, 10, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 11, 3, 11, 246, 8, 
		    11, 1, 11, 1, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 13, 1, 13, 1, 13, 
		    5, 13, 257, 8, 13, 10, 13, 12, 13, 260, 9, 13, 1, 14, 1, 14, 1, 14, 
		    5, 14, 265, 8, 14, 10, 14, 12, 14, 268, 9, 14, 1, 15, 1, 15, 5, 15, 
		    272, 8, 15, 10, 15, 12, 15, 275, 9, 15, 1, 15, 3, 15, 278, 8, 15, 
		    1, 16, 1, 16, 1, 17, 1, 17, 1, 18, 1, 18, 1, 18, 1, 18, 1, 18, 3, 
		    18, 289, 8, 18, 1, 18, 3, 18, 292, 8, 18, 1, 18, 1, 18, 1, 18, 1, 
		    18, 1, 18, 1, 18, 1, 18, 1, 18, 3, 18, 302, 8, 18, 1, 19, 1, 19, 1, 
		    19, 1, 20, 1, 20, 3, 20, 309, 8, 20, 1, 20, 1, 20, 1, 21, 1, 21, 3, 
		    21, 315, 8, 21, 1, 21, 1, 21, 1, 22, 1, 22, 3, 22, 321, 8, 22, 1, 
		    22, 5, 22, 324, 8, 22, 10, 22, 12, 22, 327, 9, 22, 1, 22, 3, 22, 330, 
		    8, 22, 1, 23, 5, 23, 333, 8, 23, 10, 23, 12, 23, 336, 9, 23, 1, 23, 
		    1, 23, 1, 24, 1, 24, 3, 24, 342, 8, 24, 1, 24, 1, 24, 1, 24, 1, 24, 
		    3, 24, 348, 8, 24, 1, 25, 1, 25, 1, 26, 1, 26, 1, 27, 1, 27, 1, 28, 
		    1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 28, 1, 
		    28, 1, 28, 1, 28, 1, 28, 3, 28, 370, 8, 28, 1, 29, 1, 29, 1, 30, 1, 
		    30, 1, 31, 1, 31, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 1, 32, 
		    1, 33, 1, 33, 1, 34, 1, 34, 1, 35, 1, 35, 1, 36, 1, 36, 1, 37, 1, 
		    37, 1, 38, 1, 38, 1, 39, 1, 39, 1, 39, 1, 39, 5, 39, 401, 8, 39, 10, 
		    39, 12, 39, 404, 9, 39, 1, 40, 1, 40, 1, 40, 1, 40, 5, 40, 410, 8, 
		    40, 10, 40, 12, 40, 413, 9, 40, 1, 41, 1, 41, 1, 41, 1, 41, 3, 41, 
		    419, 8, 41, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 1, 42, 
		    1, 42, 3, 42, 430, 8, 42, 1, 43, 1, 43, 1, 44, 1, 44, 1, 44, 5, 44, 
		    437, 8, 44, 10, 44, 12, 44, 440, 9, 44, 1, 45, 1, 45, 1, 45, 5, 45, 
		    445, 8, 45, 10, 45, 12, 45, 448, 9, 45, 1, 46, 1, 46, 1, 46, 3, 46, 
		    453, 8, 46, 1, 47, 1, 47, 1, 47, 1, 47, 1, 47, 1, 47, 1, 47, 1, 47, 
		    3, 47, 463, 8, 47, 1, 48, 1, 48, 1, 48, 3, 48, 468, 8, 48, 1, 48, 
		    1, 48, 1, 49, 1, 49, 1, 49, 5, 49, 475, 8, 49, 10, 49, 12, 49, 478, 
		    9, 49, 1, 50, 1, 50, 1, 50, 1, 51, 1, 51, 1, 52, 1, 52, 1, 53, 1, 
		    53, 1, 54, 1, 54, 1, 54, 1, 54, 1, 54, 3, 54, 494, 8, 54, 1, 54, 1, 
		    54, 5, 54, 498, 8, 54, 10, 54, 12, 54, 501, 9, 54, 1, 55, 1, 55, 1, 
		    56, 1, 56, 1, 56, 5, 56, 508, 8, 56, 10, 56, 12, 56, 511, 9, 56, 1, 
		    57, 1, 57, 1, 57, 3, 57, 516, 8, 57, 1, 57, 1, 57, 3, 57, 520, 8, 
		    57, 1, 58, 1, 58, 1, 59, 1, 59, 1, 59, 5, 59, 527, 8, 59, 10, 59, 
		    12, 59, 530, 9, 59, 1, 60, 1, 60, 1, 60, 3, 60, 535, 8, 60, 1, 60, 
		    1, 60, 1, 60, 3, 60, 540, 8, 60, 1, 60, 3, 60, 543, 8, 60, 1, 61, 
		    1, 61, 1, 61, 5, 61, 548, 8, 61, 10, 61, 12, 61, 551, 9, 61, 1, 62, 
		    1, 62, 1, 62, 3, 62, 556, 8, 62, 1, 62, 1, 62, 1, 63, 1, 63, 1, 63, 
		    1, 63, 1, 63, 5, 63, 565, 8, 63, 10, 63, 12, 63, 568, 9, 63, 1, 63, 
		    1, 63, 3, 63, 572, 8, 63, 1, 64, 1, 64, 1, 65, 1, 65, 1, 66, 1, 66, 
		    1, 66, 1, 66, 1, 66, 1, 66, 1, 66, 1, 66, 3, 66, 586, 8, 66, 1, 67, 
		    1, 67, 1, 68, 1, 68, 1, 69, 1, 69, 1, 70, 1, 70, 1, 71, 1, 71, 1, 
		    72, 1, 72, 1, 72, 0, 0, 73, 0, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 
		    22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48, 50, 52, 54, 
		    56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 82, 84, 86, 88, 
		    90, 92, 94, 96, 98, 100, 102, 104, 106, 108, 110, 112, 114, 116, 118, 
		    120, 122, 124, 126, 128, 130, 132, 134, 136, 138, 140, 142, 144, 0, 
		    4, 1, 0, 28, 29, 1, 0, 30, 31, 1, 0, 22, 27, 2, 0, 33, 53, 55, 55, 
		    600, 0, 147, 1, 0, 0, 0, 2, 163, 1, 0, 0, 0, 4, 168, 1, 0, 0, 0, 6, 
		    173, 1, 0, 0, 0, 8, 180, 1, 0, 0, 0, 10, 182, 1, 0, 0, 0, 12, 185, 
		    1, 0, 0, 0, 14, 191, 1, 0, 0, 0, 16, 200, 1, 0, 0, 0, 18, 232, 1, 
		    0, 0, 0, 20, 234, 1, 0, 0, 0, 22, 239, 1, 0, 0, 0, 24, 251, 1, 0, 
		    0, 0, 26, 253, 1, 0, 0, 0, 28, 261, 1, 0, 0, 0, 30, 269, 1, 0, 0, 
		    0, 32, 279, 1, 0, 0, 0, 34, 281, 1, 0, 0, 0, 36, 301, 1, 0, 0, 0, 
		    38, 303, 1, 0, 0, 0, 40, 306, 1, 0, 0, 0, 42, 312, 1, 0, 0, 0, 44, 
		    318, 1, 0, 0, 0, 46, 334, 1, 0, 0, 0, 48, 339, 1, 0, 0, 0, 50, 349, 
		    1, 0, 0, 0, 52, 351, 1, 0, 0, 0, 54, 353, 1, 0, 0, 0, 56, 369, 1, 
		    0, 0, 0, 58, 371, 1, 0, 0, 0, 60, 373, 1, 0, 0, 0, 62, 375, 1, 0, 
		    0, 0, 64, 377, 1, 0, 0, 0, 66, 384, 1, 0, 0, 0, 68, 386, 1, 0, 0, 
		    0, 70, 388, 1, 0, 0, 0, 72, 390, 1, 0, 0, 0, 74, 392, 1, 0, 0, 0, 
		    76, 394, 1, 0, 0, 0, 78, 396, 1, 0, 0, 0, 80, 405, 1, 0, 0, 0, 82, 
		    418, 1, 0, 0, 0, 84, 429, 1, 0, 0, 0, 86, 431, 1, 0, 0, 0, 88, 433, 
		    1, 0, 0, 0, 90, 441, 1, 0, 0, 0, 92, 452, 1, 0, 0, 0, 94, 462, 1, 
		    0, 0, 0, 96, 464, 1, 0, 0, 0, 98, 471, 1, 0, 0, 0, 100, 479, 1, 0, 
		    0, 0, 102, 482, 1, 0, 0, 0, 104, 484, 1, 0, 0, 0, 106, 486, 1, 0, 
		    0, 0, 108, 493, 1, 0, 0, 0, 110, 502, 1, 0, 0, 0, 112, 504, 1, 0, 
		    0, 0, 114, 512, 1, 0, 0, 0, 116, 521, 1, 0, 0, 0, 118, 523, 1, 0, 
		    0, 0, 120, 531, 1, 0, 0, 0, 122, 544, 1, 0, 0, 0, 124, 555, 1, 0, 
		    0, 0, 126, 571, 1, 0, 0, 0, 128, 573, 1, 0, 0, 0, 130, 575, 1, 0, 
		    0, 0, 132, 585, 1, 0, 0, 0, 134, 587, 1, 0, 0, 0, 136, 589, 1, 0, 
		    0, 0, 138, 591, 1, 0, 0, 0, 140, 593, 1, 0, 0, 0, 142, 595, 1, 0, 
		    0, 0, 144, 597, 1, 0, 0, 0, 146, 148, 3, 2, 1, 0, 147, 146, 1, 0, 
		    0, 0, 147, 148, 1, 0, 0, 0, 148, 152, 1, 0, 0, 0, 149, 151, 3, 10, 
		    5, 0, 150, 149, 1, 0, 0, 0, 151, 154, 1, 0, 0, 0, 152, 150, 1, 0, 
		    0, 0, 152, 153, 1, 0, 0, 0, 153, 158, 1, 0, 0, 0, 154, 152, 1, 0, 
		    0, 0, 155, 157, 3, 4, 2, 0, 156, 155, 1, 0, 0, 0, 157, 160, 1, 0, 
		    0, 0, 158, 156, 1, 0, 0, 0, 158, 159, 1, 0, 0, 0, 159, 161, 1, 0, 
		    0, 0, 160, 158, 1, 0, 0, 0, 161, 162, 5, 0, 0, 1, 162, 1, 1, 0, 0, 
		    0, 163, 164, 3, 136, 68, 0, 164, 165, 5, 3, 0, 0, 165, 3, 1, 0, 0, 
		    0, 166, 169, 3, 14, 7, 0, 167, 169, 3, 6, 3, 0, 168, 166, 1, 0, 0, 
		    0, 168, 167, 1, 0, 0, 0, 169, 5, 1, 0, 0, 0, 170, 172, 3, 12, 6, 0, 
		    171, 170, 1, 0, 0, 0, 172, 175, 1, 0, 0, 0, 173, 171, 1, 0, 0, 0, 
		    173, 174, 1, 0, 0, 0, 174, 176, 1, 0, 0, 0, 175, 173, 1, 0, 0, 0, 
		    176, 177, 3, 8, 4, 0, 177, 7, 1, 0, 0, 0, 178, 181, 3, 20, 10, 0, 
		    179, 181, 3, 22, 11, 0, 180, 178, 1, 0, 0, 0, 180, 179, 1, 0, 0, 0, 
		    181, 9, 1, 0, 0, 0, 182, 183, 3, 138, 69, 0, 183, 184, 5, 2, 0, 0, 
		    184, 11, 1, 0, 0, 0, 185, 186, 5, 10, 0, 0, 186, 189, 3, 16, 8, 0, 
		    187, 188, 5, 22, 0, 0, 188, 190, 5, 2, 0, 0, 189, 187, 1, 0, 0, 0, 
		    189, 190, 1, 0, 0, 0, 190, 13, 1, 0, 0, 0, 191, 192, 5, 10, 0, 0, 
		    192, 195, 3, 16, 8, 0, 193, 194, 5, 22, 0, 0, 194, 196, 5, 2, 0, 0, 
		    195, 193, 1, 0, 0, 0, 195, 196, 1, 0, 0, 0, 196, 197, 1, 0, 0, 0, 
		    197, 198, 3, 144, 72, 0, 198, 199, 3, 18, 9, 0, 199, 15, 1, 0, 0, 
		    0, 200, 205, 3, 134, 67, 0, 201, 202, 5, 32, 0, 0, 202, 204, 3, 134, 
		    67, 0, 203, 201, 1, 0, 0, 0, 204, 207, 1, 0, 0, 0, 205, 203, 1, 0, 
		    0, 0, 205, 206, 1, 0, 0, 0, 206, 17, 1, 0, 0, 0, 207, 205, 1, 0, 0, 
		    0, 208, 233, 3, 134, 67, 0, 209, 210, 3, 134, 67, 0, 210, 211, 5, 
		    32, 0, 0, 211, 216, 3, 134, 67, 0, 212, 213, 5, 32, 0, 0, 213, 215, 
		    3, 134, 67, 0, 214, 212, 1, 0, 0, 0, 215, 218, 1, 0, 0, 0, 216, 214, 
		    1, 0, 0, 0, 216, 217, 1, 0, 0, 0, 217, 233, 1, 0, 0, 0, 218, 216, 
		    1, 0, 0, 0, 219, 220, 3, 134, 67, 0, 220, 221, 5, 32, 0, 0, 221, 222, 
		    5, 11, 0, 0, 222, 227, 3, 134, 67, 0, 223, 224, 5, 18, 0, 0, 224, 
		    226, 3, 134, 67, 0, 225, 223, 1, 0, 0, 0, 226, 229, 1, 0, 0, 0, 227, 
		    225, 1, 0, 0, 0, 227, 228, 1, 0, 0, 0, 228, 230, 1, 0, 0, 0, 229, 
		    227, 1, 0, 0, 0, 230, 231, 5, 12, 0, 0, 231, 233, 1, 0, 0, 0, 232, 
		    208, 1, 0, 0, 0, 232, 209, 1, 0, 0, 0, 232, 219, 1, 0, 0, 0, 233, 
		    19, 1, 0, 0, 0, 234, 235, 3, 140, 70, 0, 235, 236, 3, 134, 67, 0, 
		    236, 237, 5, 22, 0, 0, 237, 238, 3, 24, 12, 0, 238, 21, 1, 0, 0, 0, 
		    239, 240, 3, 142, 71, 0, 240, 241, 3, 134, 67, 0, 241, 242, 5, 13, 
		    0, 0, 242, 245, 3, 134, 67, 0, 243, 244, 5, 18, 0, 0, 244, 246, 3, 
		    112, 56, 0, 245, 243, 1, 0, 0, 0, 245, 246, 1, 0, 0, 0, 246, 247, 
		    1, 0, 0, 0, 247, 248, 5, 14, 0, 0, 248, 249, 5, 22, 0, 0, 249, 250, 
		    3, 116, 58, 0, 250, 23, 1, 0, 0, 0, 251, 252, 3, 26, 13, 0, 252, 25, 
		    1, 0, 0, 0, 253, 258, 3, 28, 14, 0, 254, 255, 5, 19, 0, 0, 255, 257, 
		    3, 28, 14, 0, 256, 254, 1, 0, 0, 0, 257, 260, 1, 0, 0, 0, 258, 256, 
		    1, 0, 0, 0, 258, 259, 1, 0, 0, 0, 259, 27, 1, 0, 0, 0, 260, 258, 1, 
		    0, 0, 0, 261, 266, 3, 30, 15, 0, 262, 263, 5, 20, 0, 0, 263, 265, 
		    3, 30, 15, 0, 264, 262, 1, 0, 0, 0, 265, 268, 1, 0, 0, 0, 266, 264, 
		    1, 0, 0, 0, 266, 267, 1, 0, 0, 0, 267, 29, 1, 0, 0, 0, 268, 266, 1, 
		    0, 0, 0, 269, 273, 3, 36, 18, 0, 270, 272, 3, 40, 20, 0, 271, 270, 
		    1, 0, 0, 0, 272, 275, 1, 0, 0, 0, 273, 271, 1, 0, 0, 0, 273, 274, 
		    1, 0, 0, 0, 274, 277, 1, 0, 0, 0, 275, 273, 1, 0, 0, 0, 276, 278, 
		    3, 32, 16, 0, 277, 276, 1, 0, 0, 0, 277, 278, 1, 0, 0, 0, 278, 31, 
		    1, 0, 0, 0, 279, 280, 5, 21, 0, 0, 280, 33, 1, 0, 0, 0, 281, 282, 
		    5, 37, 0, 0, 282, 35, 1, 0, 0, 0, 283, 302, 3, 132, 66, 0, 284, 302, 
		    3, 34, 17, 0, 285, 291, 3, 134, 67, 0, 286, 288, 5, 13, 0, 0, 287, 
		    289, 3, 118, 59, 0, 288, 287, 1, 0, 0, 0, 288, 289, 1, 0, 0, 0, 289, 
		    290, 1, 0, 0, 0, 290, 292, 5, 14, 0, 0, 291, 286, 1, 0, 0, 0, 291, 
		    292, 1, 0, 0, 0, 292, 302, 1, 0, 0, 0, 293, 302, 3, 42, 21, 0, 294, 
		    302, 3, 56, 28, 0, 295, 302, 3, 64, 32, 0, 296, 297, 5, 13, 0, 0, 
		    297, 298, 3, 24, 12, 0, 298, 299, 5, 14, 0, 0, 299, 302, 1, 0, 0, 
		    0, 300, 302, 3, 38, 19, 0, 301, 283, 1, 0, 0, 0, 301, 284, 1, 0, 0, 
		    0, 301, 285, 1, 0, 0, 0, 301, 293, 1, 0, 0, 0, 301, 294, 1, 0, 0, 
		    0, 301, 295, 1, 0, 0, 0, 301, 296, 1, 0, 0, 0, 301, 300, 1, 0, 0, 
		    0, 302, 37, 1, 0, 0, 0, 303, 304, 5, 21, 0, 0, 304, 305, 3, 134, 67, 
		    0, 305, 39, 1, 0, 0, 0, 306, 308, 5, 15, 0, 0, 307, 309, 3, 118, 59, 
		    0, 308, 307, 1, 0, 0, 0, 308, 309, 1, 0, 0, 0, 309, 310, 1, 0, 0, 
		    0, 310, 311, 5, 16, 0, 0, 311, 41, 1, 0, 0, 0, 312, 314, 5, 11, 0, 
		    0, 313, 315, 3, 44, 22, 0, 314, 313, 1, 0, 0, 0, 314, 315, 1, 0, 0, 
		    0, 315, 316, 1, 0, 0, 0, 316, 317, 5, 12, 0, 0, 317, 43, 1, 0, 0, 
		    0, 318, 325, 3, 46, 23, 0, 319, 321, 5, 18, 0, 0, 320, 319, 1, 0, 
		    0, 0, 320, 321, 1, 0, 0, 0, 321, 322, 1, 0, 0, 0, 322, 324, 3, 46, 
		    23, 0, 323, 320, 1, 0, 0, 0, 324, 327, 1, 0, 0, 0, 325, 323, 1, 0, 
		    0, 0, 325, 326, 1, 0, 0, 0, 326, 329, 1, 0, 0, 0, 327, 325, 1, 0, 
		    0, 0, 328, 330, 5, 18, 0, 0, 329, 328, 1, 0, 0, 0, 329, 330, 1, 0, 
		    0, 0, 330, 45, 1, 0, 0, 0, 331, 333, 3, 12, 6, 0, 332, 331, 1, 0, 
		    0, 0, 333, 336, 1, 0, 0, 0, 334, 332, 1, 0, 0, 0, 334, 335, 1, 0, 
		    0, 0, 335, 337, 1, 0, 0, 0, 336, 334, 1, 0, 0, 0, 337, 338, 3, 48, 
		    24, 0, 338, 47, 1, 0, 0, 0, 339, 341, 3, 134, 67, 0, 340, 342, 5, 
		    21, 0, 0, 341, 340, 1, 0, 0, 0, 341, 342, 1, 0, 0, 0, 342, 343, 1, 
		    0, 0, 0, 343, 344, 5, 17, 0, 0, 344, 347, 3, 24, 12, 0, 345, 346, 
		    5, 38, 0, 0, 346, 348, 3, 50, 25, 0, 347, 345, 1, 0, 0, 0, 347, 348, 
		    1, 0, 0, 0, 348, 49, 1, 0, 0, 0, 349, 350, 3, 86, 43, 0, 350, 51, 
		    1, 0, 0, 0, 351, 352, 5, 39, 0, 0, 352, 53, 1, 0, 0, 0, 353, 354, 
		    5, 40, 0, 0, 354, 55, 1, 0, 0, 0, 355, 356, 3, 54, 27, 0, 356, 357, 
		    5, 11, 0, 0, 357, 358, 3, 24, 12, 0, 358, 359, 5, 17, 0, 0, 359, 360, 
		    3, 24, 12, 0, 360, 361, 5, 12, 0, 0, 361, 370, 1, 0, 0, 0, 362, 363, 
		    3, 54, 27, 0, 363, 364, 5, 24, 0, 0, 364, 365, 3, 24, 12, 0, 365, 
		    366, 5, 18, 0, 0, 366, 367, 3, 24, 12, 0, 367, 368, 5, 25, 0, 0, 368, 
		    370, 1, 0, 0, 0, 369, 355, 1, 0, 0, 0, 369, 362, 1, 0, 0, 0, 370, 
		    57, 1, 0, 0, 0, 371, 372, 5, 41, 0, 0, 372, 59, 1, 0, 0, 0, 373, 374, 
		    5, 42, 0, 0, 374, 61, 1, 0, 0, 0, 375, 376, 5, 43, 0, 0, 376, 63, 
		    1, 0, 0, 0, 377, 378, 3, 58, 29, 0, 378, 379, 3, 66, 33, 0, 379, 380, 
		    3, 60, 30, 0, 380, 381, 3, 24, 12, 0, 381, 382, 3, 62, 31, 0, 382, 
		    383, 3, 24, 12, 0, 383, 65, 1, 0, 0, 0, 384, 385, 3, 86, 43, 0, 385, 
		    67, 1, 0, 0, 0, 386, 387, 3, 78, 39, 0, 387, 69, 1, 0, 0, 0, 388, 
		    389, 5, 44, 0, 0, 389, 71, 1, 0, 0, 0, 390, 391, 5, 45, 0, 0, 391, 
		    73, 1, 0, 0, 0, 392, 393, 5, 46, 0, 0, 393, 75, 1, 0, 0, 0, 394, 395, 
		    5, 47, 0, 0, 395, 77, 1, 0, 0, 0, 396, 402, 3, 80, 40, 0, 397, 398, 
		    3, 74, 37, 0, 398, 399, 3, 80, 40, 0, 399, 401, 1, 0, 0, 0, 400, 397, 
		    1, 0, 0, 0, 401, 404, 1, 0, 0, 0, 402, 400, 1, 0, 0, 0, 402, 403, 
		    1, 0, 0, 0, 403, 79, 1, 0, 0, 0, 404, 402, 1, 0, 0, 0, 405, 411, 3, 
		    82, 41, 0, 406, 407, 3, 72, 36, 0, 407, 408, 3, 82, 41, 0, 408, 410, 
		    1, 0, 0, 0, 409, 406, 1, 0, 0, 0, 410, 413, 1, 0, 0, 0, 411, 409, 
		    1, 0, 0, 0, 411, 412, 1, 0, 0, 0, 412, 81, 1, 0, 0, 0, 413, 411, 1, 
		    0, 0, 0, 414, 415, 3, 76, 38, 0, 415, 416, 3, 82, 41, 0, 416, 419, 
		    1, 0, 0, 0, 417, 419, 3, 84, 42, 0, 418, 414, 1, 0, 0, 0, 418, 417, 
		    1, 0, 0, 0, 419, 83, 1, 0, 0, 0, 420, 421, 3, 88, 44, 0, 421, 422, 
		    3, 110, 55, 0, 422, 423, 3, 88, 44, 0, 423, 430, 1, 0, 0, 0, 424, 
		    425, 3, 88, 44, 0, 425, 426, 3, 70, 35, 0, 426, 427, 5, 6, 0, 0, 427, 
		    430, 1, 0, 0, 0, 428, 430, 3, 88, 44, 0, 429, 420, 1, 0, 0, 0, 429, 
		    424, 1, 0, 0, 0, 429, 428, 1, 0, 0, 0, 430, 85, 1, 0, 0, 0, 431, 432, 
		    3, 68, 34, 0, 432, 87, 1, 0, 0, 0, 433, 438, 3, 90, 45, 0, 434, 435, 
		    7, 0, 0, 0, 435, 437, 3, 90, 45, 0, 436, 434, 1, 0, 0, 0, 437, 440, 
		    1, 0, 0, 0, 438, 436, 1, 0, 0, 0, 438, 439, 1, 0, 0, 0, 439, 89, 1, 
		    0, 0, 0, 440, 438, 1, 0, 0, 0, 441, 446, 3, 92, 46, 0, 442, 443, 7, 
		    1, 0, 0, 443, 445, 3, 92, 46, 0, 444, 442, 1, 0, 0, 0, 445, 448, 1, 
		    0, 0, 0, 446, 444, 1, 0, 0, 0, 446, 447, 1, 0, 0, 0, 447, 91, 1, 0, 
		    0, 0, 448, 446, 1, 0, 0, 0, 449, 450, 7, 0, 0, 0, 450, 453, 3, 92, 
		    46, 0, 451, 453, 3, 94, 47, 0, 452, 449, 1, 0, 0, 0, 452, 451, 1, 
		    0, 0, 0, 453, 93, 1, 0, 0, 0, 454, 463, 3, 132, 66, 0, 455, 463, 3, 
		    108, 54, 0, 456, 463, 3, 96, 48, 0, 457, 463, 3, 100, 50, 0, 458, 
		    459, 5, 13, 0, 0, 459, 460, 3, 86, 43, 0, 460, 461, 5, 14, 0, 0, 461, 
		    463, 1, 0, 0, 0, 462, 454, 1, 0, 0, 0, 462, 455, 1, 0, 0, 0, 462, 
		    456, 1, 0, 0, 0, 462, 457, 1, 0, 0, 0, 462, 458, 1, 0, 0, 0, 463, 
		    95, 1, 0, 0, 0, 464, 465, 3, 134, 67, 0, 465, 467, 5, 13, 0, 0, 466, 
		    468, 3, 98, 49, 0, 467, 466, 1, 0, 0, 0, 467, 468, 1, 0, 0, 0, 468, 
		    469, 1, 0, 0, 0, 469, 470, 5, 14, 0, 0, 470, 97, 1, 0, 0, 0, 471, 
		    476, 3, 86, 43, 0, 472, 473, 5, 18, 0, 0, 473, 475, 3, 86, 43, 0, 
		    474, 472, 1, 0, 0, 0, 475, 478, 1, 0, 0, 0, 476, 474, 1, 0, 0, 0, 
		    476, 477, 1, 0, 0, 0, 477, 99, 1, 0, 0, 0, 478, 476, 1, 0, 0, 0, 479, 
		    480, 5, 15, 0, 0, 480, 481, 5, 16, 0, 0, 481, 101, 1, 0, 0, 0, 482, 
		    483, 5, 48, 0, 0, 483, 103, 1, 0, 0, 0, 484, 485, 5, 49, 0, 0, 485, 
		    105, 1, 0, 0, 0, 486, 487, 5, 50, 0, 0, 487, 107, 1, 0, 0, 0, 488, 
		    494, 3, 102, 51, 0, 489, 494, 3, 104, 52, 0, 490, 494, 3, 106, 53, 
		    0, 491, 494, 5, 54, 0, 0, 492, 494, 3, 134, 67, 0, 493, 488, 1, 0, 
		    0, 0, 493, 489, 1, 0, 0, 0, 493, 490, 1, 0, 0, 0, 493, 491, 1, 0, 
		    0, 0, 493, 492, 1, 0, 0, 0, 494, 499, 1, 0, 0, 0, 495, 496, 5, 32, 
		    0, 0, 496, 498, 3, 134, 67, 0, 497, 495, 1, 0, 0, 0, 498, 501, 1, 
		    0, 0, 0, 499, 497, 1, 0, 0, 0, 499, 500, 1, 0, 0, 0, 500, 109, 1, 
		    0, 0, 0, 501, 499, 1, 0, 0, 0, 502, 503, 7, 2, 0, 0, 503, 111, 1, 
		    0, 0, 0, 504, 509, 3, 114, 57, 0, 505, 506, 5, 18, 0, 0, 506, 508, 
		    3, 114, 57, 0, 507, 505, 1, 0, 0, 0, 508, 511, 1, 0, 0, 0, 509, 507, 
		    1, 0, 0, 0, 509, 510, 1, 0, 0, 0, 510, 113, 1, 0, 0, 0, 511, 509, 
		    1, 0, 0, 0, 512, 515, 3, 134, 67, 0, 513, 514, 5, 17, 0, 0, 514, 516, 
		    3, 134, 67, 0, 515, 513, 1, 0, 0, 0, 515, 516, 1, 0, 0, 0, 516, 519, 
		    1, 0, 0, 0, 517, 518, 5, 22, 0, 0, 518, 520, 3, 86, 43, 0, 519, 517, 
		    1, 0, 0, 0, 519, 520, 1, 0, 0, 0, 520, 115, 1, 0, 0, 0, 521, 522, 
		    3, 86, 43, 0, 522, 117, 1, 0, 0, 0, 523, 528, 3, 120, 60, 0, 524, 
		    525, 5, 18, 0, 0, 525, 527, 3, 120, 60, 0, 526, 524, 1, 0, 0, 0, 527, 
		    530, 1, 0, 0, 0, 528, 526, 1, 0, 0, 0, 528, 529, 1, 0, 0, 0, 529, 
		    119, 1, 0, 0, 0, 530, 528, 1, 0, 0, 0, 531, 542, 3, 134, 67, 0, 532, 
		    534, 5, 17, 0, 0, 533, 535, 3, 76, 38, 0, 534, 533, 1, 0, 0, 0, 534, 
		    535, 1, 0, 0, 0, 535, 536, 1, 0, 0, 0, 536, 543, 3, 126, 63, 0, 537, 
		    539, 5, 13, 0, 0, 538, 540, 3, 122, 61, 0, 539, 538, 1, 0, 0, 0, 539, 
		    540, 1, 0, 0, 0, 540, 541, 1, 0, 0, 0, 541, 543, 5, 14, 0, 0, 542, 
		    532, 1, 0, 0, 0, 542, 537, 1, 0, 0, 0, 542, 543, 1, 0, 0, 0, 543, 
		    121, 1, 0, 0, 0, 544, 549, 3, 124, 62, 0, 545, 546, 5, 18, 0, 0, 546, 
		    548, 3, 124, 62, 0, 547, 545, 1, 0, 0, 0, 548, 551, 1, 0, 0, 0, 549, 
		    547, 1, 0, 0, 0, 549, 550, 1, 0, 0, 0, 550, 123, 1, 0, 0, 0, 551, 
		    549, 1, 0, 0, 0, 552, 553, 3, 134, 67, 0, 553, 554, 5, 17, 0, 0, 554, 
		    556, 1, 0, 0, 0, 555, 552, 1, 0, 0, 0, 555, 556, 1, 0, 0, 0, 556, 
		    557, 1, 0, 0, 0, 557, 558, 3, 86, 43, 0, 558, 125, 1, 0, 0, 0, 559, 
		    572, 3, 86, 43, 0, 560, 561, 5, 15, 0, 0, 561, 566, 3, 86, 43, 0, 
		    562, 563, 5, 18, 0, 0, 563, 565, 3, 86, 43, 0, 564, 562, 1, 0, 0, 
		    0, 565, 568, 1, 0, 0, 0, 566, 564, 1, 0, 0, 0, 566, 567, 1, 0, 0, 
		    0, 567, 569, 1, 0, 0, 0, 568, 566, 1, 0, 0, 0, 569, 570, 5, 16, 0, 
		    0, 570, 572, 1, 0, 0, 0, 571, 559, 1, 0, 0, 0, 571, 560, 1, 0, 0, 
		    0, 572, 127, 1, 0, 0, 0, 573, 574, 5, 52, 0, 0, 574, 129, 1, 0, 0, 
		    0, 575, 576, 5, 53, 0, 0, 576, 131, 1, 0, 0, 0, 577, 586, 5, 1, 0, 
		    0, 578, 586, 5, 2, 0, 0, 579, 586, 5, 3, 0, 0, 580, 586, 5, 5, 0, 
		    0, 581, 586, 5, 4, 0, 0, 582, 586, 3, 128, 64, 0, 583, 586, 3, 130, 
		    65, 0, 584, 586, 3, 52, 26, 0, 585, 577, 1, 0, 0, 0, 585, 578, 1, 
		    0, 0, 0, 585, 579, 1, 0, 0, 0, 585, 580, 1, 0, 0, 0, 585, 581, 1, 
		    0, 0, 0, 585, 582, 1, 0, 0, 0, 585, 583, 1, 0, 0, 0, 585, 584, 1, 
		    0, 0, 0, 586, 133, 1, 0, 0, 0, 587, 588, 7, 3, 0, 0, 588, 135, 1, 
		    0, 0, 0, 589, 590, 5, 33, 0, 0, 590, 137, 1, 0, 0, 0, 591, 592, 5, 
		    34, 0, 0, 592, 139, 1, 0, 0, 0, 593, 594, 5, 35, 0, 0, 594, 141, 1, 
		    0, 0, 0, 595, 596, 5, 36, 0, 0, 596, 143, 1, 0, 0, 0, 597, 598, 5, 
		    51, 0, 0, 598, 145, 1, 0, 0, 0, 53, 147, 152, 158, 168, 173, 180, 
		    189, 195, 205, 216, 227, 232, 245, 258, 266, 273, 277, 288, 291, 301, 
		    308, 314, 320, 325, 329, 334, 341, 347, 369, 402, 411, 418, 429, 438, 
		    446, 452, 462, 467, 476, 493, 499, 509, 515, 519, 528, 534, 539, 542, 
		    549, 555, 566, 571, 585];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Scedel.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function file(): Context\FileContext
		{
		    $localContext = new Context\FileContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_file);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(147);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::SCedelVersionKw) {
		        	$this->setState(146);
		        	$this->versionDirective();
		        }
		        $this->setState(152);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::INCLUDE) {
		        	$this->setState(149);
		        	$this->includeStatement();
		        	$this->setState(154);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(158);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 103079216128) !== 0)) {
		        	$this->setState(155);
		        	$this->fileItem();
		        	$this->setState(160);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(161);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function versionDirective(): Context\VersionDirectiveContext
		{
		    $localContext = new Context\VersionDirectiveContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_versionDirective);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(163);
		        $this->scedelVersionKw();
		        $this->setState(164);
		        $this->match(self::VersionLiteral);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fileItem(): Context\FileItemContext
		{
		    $localContext = new Context\FileItemContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_fileItem);

		    try {
		        $this->setState(168);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 3, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(166);
		        	    $this->targetedAnnotationStatement();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(167);
		        	    $this->annotatedDecl();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function annotatedDecl(): Context\AnnotatedDeclContext
		{
		    $localContext = new Context\AnnotatedDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_annotatedDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(173);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::AT) {
		        	$this->setState(170);
		        	$this->inlineAnnotation();
		        	$this->setState(175);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(176);
		        $this->decl();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function decl(): Context\DeclContext
		{
		    $localContext = new Context\DeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_decl);

		    try {
		        $this->setState(180);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::TYPE:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(178);
		            	$this->typeDeclaration();
		            	break;

		            case self::VALIDATOR:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(179);
		            	$this->validatorDeclaration();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function includeStatement(): Context\IncludeStatementContext
		{
		    $localContext = new Context\IncludeStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_includeStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(182);
		        $this->includeKw();
		        $this->setState(183);
		        $this->match(self::StringLiteral);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function inlineAnnotation(): Context\InlineAnnotationContext
		{
		    $localContext = new Context\InlineAnnotationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_inlineAnnotation);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(185);
		        $this->match(self::AT);
		        $this->setState(186);
		        $this->annotationKey();
		        $this->setState(189);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::EQUAL) {
		        	$this->setState(187);
		        	$this->match(self::EQUAL);
		        	$this->setState(188);
		        	$this->match(self::StringLiteral);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function targetedAnnotationStatement(): Context\TargetedAnnotationStatementContext
		{
		    $localContext = new Context\TargetedAnnotationStatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_targetedAnnotationStatement);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(191);
		        $this->match(self::AT);
		        $this->setState(192);
		        $this->annotationKey();
		        $this->setState(195);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::EQUAL) {
		        	$this->setState(193);
		        	$this->match(self::EQUAL);
		        	$this->setState(194);
		        	$this->match(self::StringLiteral);
		        }
		        $this->setState(197);
		        $this->onKw();
		        $this->setState(198);
		        $this->annotationTarget();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function annotationKey(): Context\AnnotationKeyContext
		{
		    $localContext = new Context\AnnotationKeyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_annotationKey);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(200);
		        $this->identifier();
		        $this->setState(205);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::DOT) {
		        	$this->setState(201);
		        	$this->match(self::DOT);
		        	$this->setState(202);
		        	$this->identifier();
		        	$this->setState(207);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function annotationTarget(): Context\AnnotationTargetContext
		{
		    $localContext = new Context\AnnotationTargetContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_annotationTarget);

		    try {
		        $this->setState(232);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 11, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(208);
		        	    $this->identifier();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(209);
		        	    $this->identifier();
		        	    $this->setState(210);
		        	    $this->match(self::DOT);
		        	    $this->setState(211);
		        	    $this->identifier();
		        	    $this->setState(216);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::DOT) {
		        	    	$this->setState(212);
		        	    	$this->match(self::DOT);
		        	    	$this->setState(213);
		        	    	$this->identifier();
		        	    	$this->setState(218);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(219);
		        	    $this->identifier();
		        	    $this->setState(220);
		        	    $this->match(self::DOT);
		        	    $this->setState(221);
		        	    $this->match(self::LBRACE);
		        	    $this->setState(222);
		        	    $this->identifier();
		        	    $this->setState(227);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::COMMA) {
		        	    	$this->setState(223);
		        	    	$this->match(self::COMMA);
		        	    	$this->setState(224);
		        	    	$this->identifier();
		        	    	$this->setState(229);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(230);
		        	    $this->match(self::RBRACE);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeDeclaration(): Context\TypeDeclarationContext
		{
		    $localContext = new Context\TypeDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_typeDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(234);
		        $this->typeKw();
		        $this->setState(235);
		        $this->identifier();
		        $this->setState(236);
		        $this->match(self::EQUAL);
		        $this->setState(237);
		        $this->typeExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function validatorDeclaration(): Context\ValidatorDeclarationContext
		{
		    $localContext = new Context\ValidatorDeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_validatorDeclaration);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(239);
		        $this->validatorKw();
		        $this->setState(240);
		        $this->identifier();
		        $this->setState(241);
		        $this->match(self::LPAREN);
		        $this->setState(242);
		        $this->identifier();
		        $this->setState(245);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COMMA) {
		        	$this->setState(243);
		        	$this->match(self::COMMA);
		        	$this->setState(244);
		        	$this->paramList();
		        }
		        $this->setState(247);
		        $this->match(self::RPAREN);
		        $this->setState(248);
		        $this->match(self::EQUAL);
		        $this->setState(249);
		        $this->validatorBody();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeExpr(): Context\TypeExprContext
		{
		    $localContext = new Context\TypeExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_typeExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(251);
		        $this->unionExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unionExpr(): Context\UnionExprContext
		{
		    $localContext = new Context\UnionExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_unionExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(253);
		        $this->intersectExpr();
		        $this->setState(258);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(254);
		        		$this->match(self::PIPE);
		        		$this->setState(255);
		        		$this->intersectExpr(); 
		        	}

		        	$this->setState(260);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function intersectExpr(): Context\IntersectExprContext
		{
		    $localContext = new Context\IntersectExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_intersectExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(261);
		        $this->postfixExpr();
		        $this->setState(266);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(262);
		        		$this->match(self::AMP);
		        		$this->setState(263);
		        		$this->postfixExpr(); 
		        	}

		        	$this->setState(268);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 14, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function postfixExpr(): Context\PostfixExprContext
		{
		    $localContext = new Context\PostfixExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_postfixExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(269);
		        $this->atomExpr();
		        $this->setState(273);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(270);
		        		$this->arraySuffix(); 
		        	}

		        	$this->setState(275);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 15, $this->ctx);
		        }
		        $this->setState(277);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 16, $this->ctx)) {
		            case 1:
		        	    $this->setState(276);
		        	    $this->nullableSuffix();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function nullableSuffix(): Context\NullableSuffixContext
		{
		    $localContext = new Context\NullableSuffixContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_nullableSuffix);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(279);
		        $this->match(self::QMARK);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function absentKw(): Context\AbsentKwContext
		{
		    $localContext = new Context\AbsentKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_absentKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(281);
		        $this->match(self::ABSENT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function atomExpr(): Context\AtomExprContext
		{
		    $localContext = new Context\AtomExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_atomExpr);

		    try {
		        $this->setState(301);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 19, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(283);
		        	    $this->literal();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(284);
		        	    $this->absentKw();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(285);
		        	    $this->identifier();
		        	    $this->setState(291);
		        	    $this->errorHandler->sync($this);
		        	    $_la = $this->input->LA(1);

		        	    if ($_la === self::LPAREN) {
		        	    	$this->setState(286);
		        	    	$this->match(self::LPAREN);
		        	    	$this->setState(288);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);

		        	    	if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 54043186938511360) !== 0)) {
		        	    		$this->setState(287);
		        	    		$this->constraintList();
		        	    	}
		        	    	$this->setState(290);
		        	    	$this->match(self::RPAREN);
		        	    }
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(293);
		        	    $this->recordType();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(294);
		        	    $this->dictType();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(295);
		        	    $this->conditionalType();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(296);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(297);
		        	    $this->typeExpr();
		        	    $this->setState(298);
		        	    $this->match(self::RPAREN);
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(300);
		        	    $this->nullableBaseOrId();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function nullableBaseOrId(): Context\NullableBaseOrIdContext
		{
		    $localContext = new Context\NullableBaseOrIdContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_nullableBaseOrId);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(303);
		        $this->match(self::QMARK);
		        $this->setState(304);
		        $this->identifier();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arraySuffix(): Context\ArraySuffixContext
		{
		    $localContext = new Context\ArraySuffixContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_arraySuffix);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(306);
		        $this->match(self::LBRACK);
		        $this->setState(308);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 54043186938511360) !== 0)) {
		        	$this->setState(307);
		        	$this->constraintList();
		        }
		        $this->setState(310);
		        $this->match(self::RBRACK);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function recordType(): Context\RecordTypeContext
		{
		    $localContext = new Context\RecordTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_recordType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(312);
		        $this->match(self::LBRACE);
		        $this->setState(314);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 54043186938512384) !== 0)) {
		        	$this->setState(313);
		        	$this->fieldList();
		        }
		        $this->setState(316);
		        $this->match(self::RBRACE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fieldList(): Context\FieldListContext
		{
		    $localContext = new Context\FieldListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_fieldList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(318);
		        $this->fieldDecl();
		        $this->setState(325);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(320);
		        		$this->errorHandler->sync($this);
		        		$_la = $this->input->LA(1);

		        		if ($_la === self::COMMA) {
		        			$this->setState(319);
		        			$this->match(self::COMMA);
		        		}
		        		$this->setState(322);
		        		$this->fieldDecl(); 
		        	}

		        	$this->setState(327);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx);
		        }
		        $this->setState(329);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COMMA) {
		        	$this->setState(328);
		        	$this->match(self::COMMA);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function fieldDecl(): Context\FieldDeclContext
		{
		    $localContext = new Context\FieldDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_fieldDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(334);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::AT) {
		        	$this->setState(331);
		        	$this->inlineAnnotation();
		        	$this->setState(336);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(337);
		        $this->field();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function field(): Context\FieldContext
		{
		    $localContext = new Context\FieldContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_field);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(339);
		        $this->identifier();
		        $this->setState(341);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::QMARK) {
		        	$this->setState(340);
		        	$this->match(self::QMARK);
		        }
		        $this->setState(343);
		        $this->match(self::COLON);
		        $this->setState(344);
		        $this->typeExpr();
		        $this->setState(347);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 27, $this->ctx)) {
		            case 1:
		        	    $this->setState(345);
		        	    $this->match(self::DEFAULT);
		        	    $this->setState(346);
		        	    $this->defaultExpr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function defaultExpr(): Context\DefaultExprContext
		{
		    $localContext = new Context\DefaultExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_defaultExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(349);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function nullKw(): Context\NullKwContext
		{
		    $localContext = new Context\NullKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_nullKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(351);
		        $this->match(self::NULL);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function dictKw(): Context\DictKwContext
		{
		    $localContext = new Context\DictKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_dictKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(353);
		        $this->match(self::DICT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function dictType(): Context\DictTypeContext
		{
		    $localContext = new Context\DictTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_dictType);

		    try {
		        $this->setState(369);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 28, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(355);
		        	    $this->dictKw();
		        	    $this->setState(356);
		        	    $this->match(self::LBRACE);
		        	    $this->setState(357);
		        	    $this->typeExpr();
		        	    $this->setState(358);
		        	    $this->match(self::COLON);
		        	    $this->setState(359);
		        	    $this->typeExpr();
		        	    $this->setState(360);
		        	    $this->match(self::RBRACE);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(362);
		        	    $this->dictKw();
		        	    $this->setState(363);
		        	    $this->match(self::LESS);
		        	    $this->setState(364);
		        	    $this->typeExpr();
		        	    $this->setState(365);
		        	    $this->match(self::COMMA);
		        	    $this->setState(366);
		        	    $this->typeExpr();
		        	    $this->setState(367);
		        	    $this->match(self::MOR);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function whenKw(): Context\WhenKwContext
		{
		    $localContext = new Context\WhenKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_whenKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(371);
		        $this->match(self::WHEN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function thenKw(): Context\ThenKwContext
		{
		    $localContext = new Context\ThenKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_thenKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(373);
		        $this->match(self::THEN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function elseKw(): Context\ElseKwContext
		{
		    $localContext = new Context\ElseKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_elseKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(375);
		        $this->match(self::ELSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function conditionalType(): Context\ConditionalTypeContext
		{
		    $localContext = new Context\ConditionalTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_conditionalType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(377);
		        $this->whenKw();
		        $this->setState(378);
		        $this->condExpr();
		        $this->setState(379);
		        $this->thenKw();
		        $this->setState(380);
		        $this->typeExpr();
		        $this->setState(381);
		        $this->elseKw();
		        $this->setState(382);
		        $this->typeExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function condExpr(): Context\CondExprContext
		{
		    $localContext = new Context\CondExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_condExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(384);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function predicate(): Context\PredicateContext
		{
		    $localContext = new Context\PredicateContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_predicate);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(386);
		        $this->predicateOrExpr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function matchesKw(): Context\MatchesKwContext
		{
		    $localContext = new Context\MatchesKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_matchesKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(388);
		        $this->match(self::MATCHES);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function andKw(): Context\AndKwContext
		{
		    $localContext = new Context\AndKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_andKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(390);
		        $this->match(self::AND);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function orKw(): Context\OrKwContext
		{
		    $localContext = new Context\OrKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_orKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(392);
		        $this->match(self::OR);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function notKw(): Context\NotKwContext
		{
		    $localContext = new Context\NotKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_notKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(394);
		        $this->match(self::NOT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function predicateOrExpr(): Context\PredicateOrExprContext
		{
		    $localContext = new Context\PredicateOrExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_predicateOrExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(396);
		        $this->predicateAndExpr();
		        $this->setState(402);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(397);
		        		$this->orKw();
		        		$this->setState(398);
		        		$this->predicateAndExpr(); 
		        	}

		        	$this->setState(404);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 29, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function predicateAndExpr(): Context\PredicateAndExprContext
		{
		    $localContext = new Context\PredicateAndExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_predicateAndExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(405);
		        $this->predicateNotExpr();
		        $this->setState(411);
		        $this->errorHandler->sync($this);

		        $alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);

		        while ($alt !== 2 && $alt !== ATN::INVALID_ALT_NUMBER) {
		        	if ($alt === 1) {
		        		$this->setState(406);
		        		$this->andKw();
		        		$this->setState(407);
		        		$this->predicateNotExpr(); 
		        	}

		        	$this->setState(413);
		        	$this->errorHandler->sync($this);

		        	$alt = $this->getInterpreter()->adaptivePredict($this->input, 30, $this->ctx);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function predicateNotExpr(): Context\PredicateNotExprContext
		{
		    $localContext = new Context\PredicateNotExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_predicateNotExpr);

		    try {
		        $this->setState(418);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 31, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(414);
		        	    $this->notKw();
		        	    $this->setState(415);
		        	    $this->predicateNotExpr();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(417);
		        	    $this->predicatePrimaryExpr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function predicatePrimaryExpr(): Context\PredicatePrimaryExprContext
		{
		    $localContext = new Context\PredicatePrimaryExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_predicatePrimaryExpr);

		    try {
		        $this->setState(429);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 32, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(420);
		        	    $this->additiveExpr();
		        	    $this->setState(421);
		        	    $this->compareOp();
		        	    $this->setState(422);
		        	    $this->additiveExpr();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(424);
		        	    $this->additiveExpr();
		        	    $this->setState(425);
		        	    $this->matchesKw();
		        	    $this->setState(426);
		        	    $this->match(self::RegexLiteral);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(428);
		        	    $this->additiveExpr();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
		    $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_expression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(431);
		        $this->predicate();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function additiveExpr(): Context\AdditiveExprContext
		{
		    $localContext = new Context\AdditiveExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_additiveExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(433);
		        $this->multiplicativeExpr();
		        $this->setState(438);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::PLUS || $_la === self::MINUS) {
		        	$this->setState(434);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::PLUS || $_la === self::MINUS)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(435);
		        	$this->multiplicativeExpr();
		        	$this->setState(440);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function multiplicativeExpr(): Context\MultiplicativeExprContext
		{
		    $localContext = new Context\MultiplicativeExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 90, self::RULE_multiplicativeExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(441);
		        $this->unaryExpr();
		        $this->setState(446);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::STAR || $_la === self::SLASH) {
		        	$this->setState(442);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::STAR || $_la === self::SLASH)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(443);
		        	$this->unaryExpr();
		        	$this->setState(448);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unaryExpr(): Context\UnaryExprContext
		{
		    $localContext = new Context\UnaryExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 92, self::RULE_unaryExpr);

		    try {
		        $this->setState(452);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::PLUS:
		            case self::MINUS:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(449);

		            	$_la = $this->input->LA(1);

		            	if (!($_la === self::PLUS || $_la === self::MINUS)) {
		            	$this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(450);
		            	$this->unaryExpr();
		            	break;

		            case self::DurationLiteral:
		            case self::StringLiteral:
		            case self::VersionLiteral:
		            case self::UnsignedInt:
		            case self::NumberLiteral:
		            case self::LPAREN:
		            case self::LBRACK:
		            case self::SCedelVersionKw:
		            case self::INCLUDE:
		            case self::TYPE:
		            case self::VALIDATOR:
		            case self::ABSENT:
		            case self::DEFAULT:
		            case self::NULL:
		            case self::DICT:
		            case self::WHEN:
		            case self::THEN:
		            case self::ELSE:
		            case self::MATCHES:
		            case self::AND:
		            case self::OR:
		            case self::NOT:
		            case self::THIS:
		            case self::PARENT:
		            case self::ROOT:
		            case self::ON:
		            case self::TRUE:
		            case self::FALSE:
		            case self::VariableIdentifier:
		            case self::Identifier:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(451);
		            	$this->valueExpr();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function valueExpr(): Context\ValueExprContext
		{
		    $localContext = new Context\ValueExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 94, self::RULE_valueExpr);

		    try {
		        $this->setState(462);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 36, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(454);
		        	    $this->literal();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(455);
		        	    $this->path();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(456);
		        	    $this->functionCall();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(457);
		        	    $this->emptyArrayExpr();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(458);
		        	    $this->match(self::LPAREN);
		        	    $this->setState(459);
		        	    $this->expression();
		        	    $this->setState(460);
		        	    $this->match(self::RPAREN);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionCall(): Context\FunctionCallContext
		{
		    $localContext = new Context\FunctionCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 96, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(464);
		        $this->identifier();
		        $this->setState(465);
		        $this->match(self::LPAREN);
		        $this->setState(467);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 72057586253340734) !== 0)) {
		        	$this->setState(466);
		        	$this->expressionList();
		        }
		        $this->setState(469);
		        $this->match(self::RPAREN);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionList(): Context\ExpressionListContext
		{
		    $localContext = new Context\ExpressionListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 98, self::RULE_expressionList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(471);
		        $this->expression();
		        $this->setState(476);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(472);
		        	$this->match(self::COMMA);
		        	$this->setState(473);
		        	$this->expression();
		        	$this->setState(478);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function emptyArrayExpr(): Context\EmptyArrayExprContext
		{
		    $localContext = new Context\EmptyArrayExprContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 100, self::RULE_emptyArrayExpr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(479);
		        $this->match(self::LBRACK);
		        $this->setState(480);
		        $this->match(self::RBRACK);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function thisKw(): Context\ThisKwContext
		{
		    $localContext = new Context\ThisKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 102, self::RULE_thisKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(482);
		        $this->match(self::THIS);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function parentKw(): Context\ParentKwContext
		{
		    $localContext = new Context\ParentKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 104, self::RULE_parentKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(484);
		        $this->match(self::PARENT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function rootKw(): Context\RootKwContext
		{
		    $localContext = new Context\RootKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 106, self::RULE_rootKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(486);
		        $this->match(self::ROOT);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function path(): Context\PathContext
		{
		    $localContext = new Context\PathContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 108, self::RULE_path);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(493);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 39, $this->ctx)) {
		        	case 1:
		        	    $this->setState(488);
		        	    $this->thisKw();
		        	break;

		        	case 2:
		        	    $this->setState(489);
		        	    $this->parentKw();
		        	break;

		        	case 3:
		        	    $this->setState(490);
		        	    $this->rootKw();
		        	break;

		        	case 4:
		        	    $this->setState(491);
		        	    $this->match(self::VariableIdentifier);
		        	break;

		        	case 5:
		        	    $this->setState(492);
		        	    $this->identifier();
		        	break;
		        }
		        $this->setState(499);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::DOT) {
		        	$this->setState(495);
		        	$this->match(self::DOT);
		        	$this->setState(496);
		        	$this->identifier();
		        	$this->setState(501);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function compareOp(): Context\CompareOpContext
		{
		    $localContext = new Context\CompareOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 110, self::RULE_compareOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(502);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 264241152) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function paramList(): Context\ParamListContext
		{
		    $localContext = new Context\ParamListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 112, self::RULE_paramList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(504);
		        $this->param();
		        $this->setState(509);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(505);
		        	$this->match(self::COMMA);
		        	$this->setState(506);
		        	$this->param();
		        	$this->setState(511);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 114, self::RULE_param);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(512);
		        $this->identifier();
		        $this->setState(515);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::COLON) {
		        	$this->setState(513);
		        	$this->match(self::COLON);
		        	$this->setState(514);
		        	$this->identifier();
		        }
		        $this->setState(519);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::EQUAL) {
		        	$this->setState(517);
		        	$this->match(self::EQUAL);
		        	$this->setState(518);
		        	$this->expression();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function validatorBody(): Context\ValidatorBodyContext
		{
		    $localContext = new Context\ValidatorBodyContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 116, self::RULE_validatorBody);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(521);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constraintList(): Context\ConstraintListContext
		{
		    $localContext = new Context\ConstraintListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 118, self::RULE_constraintList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(523);
		        $this->constraint();
		        $this->setState(528);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(524);
		        	$this->match(self::COMMA);
		        	$this->setState(525);
		        	$this->constraint();
		        	$this->setState(530);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constraint(): Context\ConstraintContext
		{
		    $localContext = new Context\ConstraintContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 120, self::RULE_constraint);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(531);
		        $this->identifier();
		        $this->setState(542);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::COLON:
		            	$this->setState(532);
		            	$this->match(self::COLON);
		            	$this->setState(534);
		            	$this->errorHandler->sync($this);

		            	switch ($this->getInterpreter()->adaptivePredict($this->input, 45, $this->ctx)) {
		            	    case 1:
		            		    $this->setState(533);
		            		    $this->notKw();
		            		break;
		            	}
		            	$this->setState(536);
		            	$this->argValue();
		            	break;

		            case self::LPAREN:
		            	$this->setState(537);
		            	$this->match(self::LPAREN);
		            	$this->setState(539);
		            	$this->errorHandler->sync($this);
		            	$_la = $this->input->LA(1);

		            	if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 72057586253340734) !== 0)) {
		            		$this->setState(538);
		            		$this->constraintCallArgList();
		            	}
		            	$this->setState(541);
		            	$this->match(self::RPAREN);
		            	break;

		            case self::RPAREN:
		            case self::RBRACK:
		            case self::COMMA:
		            	break;

		        default:
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constraintCallArgList(): Context\ConstraintCallArgListContext
		{
		    $localContext = new Context\ConstraintCallArgListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 122, self::RULE_constraintCallArgList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(544);
		        $this->constraintCallArg();
		        $this->setState(549);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::COMMA) {
		        	$this->setState(545);
		        	$this->match(self::COMMA);
		        	$this->setState(546);
		        	$this->constraintCallArg();
		        	$this->setState(551);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constraintCallArg(): Context\ConstraintCallArgContext
		{
		    $localContext = new Context\ConstraintCallArgContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 124, self::RULE_constraintCallArg);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(555);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 49, $this->ctx)) {
		            case 1:
		        	    $this->setState(552);
		        	    $this->identifier();
		        	    $this->setState(553);
		        	    $this->match(self::COLON);
		        	break;
		        }
		        $this->setState(557);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function argValue(): Context\ArgValueContext
		{
		    $localContext = new Context\ArgValueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 126, self::RULE_argValue);

		    try {
		        $this->setState(571);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 51, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(559);
		        	    $this->expression();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(560);
		        	    $this->match(self::LBRACK);
		        	    $this->setState(561);
		        	    $this->expression();
		        	    $this->setState(566);
		        	    $this->errorHandler->sync($this);

		        	    $_la = $this->input->LA(1);
		        	    while ($_la === self::COMMA) {
		        	    	$this->setState(562);
		        	    	$this->match(self::COMMA);
		        	    	$this->setState(563);
		        	    	$this->expression();
		        	    	$this->setState(568);
		        	    	$this->errorHandler->sync($this);
		        	    	$_la = $this->input->LA(1);
		        	    }
		        	    $this->setState(569);
		        	    $this->match(self::RBRACK);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function trueKw(): Context\TrueKwContext
		{
		    $localContext = new Context\TrueKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 128, self::RULE_trueKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(573);
		        $this->match(self::TRUE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function falseKw(): Context\FalseKwContext
		{
		    $localContext = new Context\FalseKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 130, self::RULE_falseKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(575);
		        $this->match(self::FALSE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 132, self::RULE_literal);

		    try {
		        $this->setState(585);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::DurationLiteral:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(577);
		            	$this->match(self::DurationLiteral);
		            	break;

		            case self::StringLiteral:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(578);
		            	$this->match(self::StringLiteral);
		            	break;

		            case self::VersionLiteral:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(579);
		            	$this->match(self::VersionLiteral);
		            	break;

		            case self::NumberLiteral:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(580);
		            	$this->match(self::NumberLiteral);
		            	break;

		            case self::UnsignedInt:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(581);
		            	$this->match(self::UnsignedInt);
		            	break;

		            case self::TRUE:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(582);
		            	$this->trueKw();
		            	break;

		            case self::FALSE:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(583);
		            	$this->falseKw();
		            	break;

		            case self::NULL:
		            	$this->enterOuterAlt($localContext, 8);
		            	$this->setState(584);
		            	$this->nullKw();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function identifier(): Context\IdentifierContext
		{
		    $localContext = new Context\IdentifierContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 134, self::RULE_identifier);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(587);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 54043186938511360) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function scedelVersionKw(): Context\ScedelVersionKwContext
		{
		    $localContext = new Context\ScedelVersionKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 136, self::RULE_scedelVersionKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(589);
		        $this->match(self::SCedelVersionKw);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function includeKw(): Context\IncludeKwContext
		{
		    $localContext = new Context\IncludeKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 138, self::RULE_includeKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(591);
		        $this->match(self::INCLUDE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function typeKw(): Context\TypeKwContext
		{
		    $localContext = new Context\TypeKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 140, self::RULE_typeKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(593);
		        $this->match(self::TYPE);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function validatorKw(): Context\ValidatorKwContext
		{
		    $localContext = new Context\ValidatorKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 142, self::RULE_validatorKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(595);
		        $this->match(self::VALIDATOR);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function onKw(): Context\OnKwContext
		{
		    $localContext = new Context\OnKwContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 144, self::RULE_onKw);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(597);
		        $this->match(self::ON);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Scedel\Generated\Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use Scedel\Generated\ScedelParser;
	use Scedel\Generated\ScedelVisitor;

	class FileContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_file;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::EOF, 0);
	    }

	    public function versionDirective(): ?VersionDirectiveContext
	    {
	    	return $this->getTypedRuleContext(VersionDirectiveContext::class, 0);
	    }

	    /**
	     * @return array<IncludeStatementContext>|IncludeStatementContext|null
	     */
	    public function includeStatement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IncludeStatementContext::class);
	    	}

	        return $this->getTypedRuleContext(IncludeStatementContext::class, $index);
	    }

	    /**
	     * @return array<FileItemContext>|FileItemContext|null
	     */
	    public function fileItem(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FileItemContext::class);
	    	}

	        return $this->getTypedRuleContext(FileItemContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitFile($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VersionDirectiveContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_versionDirective;
	    }

	    public function scedelVersionKw(): ?ScedelVersionKwContext
	    {
	    	return $this->getTypedRuleContext(ScedelVersionKwContext::class, 0);
	    }

	    public function VersionLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::VersionLiteral, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitVersionDirective($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FileItemContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_fileItem;
	    }

	    public function targetedAnnotationStatement(): ?TargetedAnnotationStatementContext
	    {
	    	return $this->getTypedRuleContext(TargetedAnnotationStatementContext::class, 0);
	    }

	    public function annotatedDecl(): ?AnnotatedDeclContext
	    {
	    	return $this->getTypedRuleContext(AnnotatedDeclContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitFileItem($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AnnotatedDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_annotatedDecl;
	    }

	    public function decl(): ?DeclContext
	    {
	    	return $this->getTypedRuleContext(DeclContext::class, 0);
	    }

	    /**
	     * @return array<InlineAnnotationContext>|InlineAnnotationContext|null
	     */
	    public function inlineAnnotation(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InlineAnnotationContext::class);
	    	}

	        return $this->getTypedRuleContext(InlineAnnotationContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitAnnotatedDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_decl;
	    }

	    public function typeDeclaration(): ?TypeDeclarationContext
	    {
	    	return $this->getTypedRuleContext(TypeDeclarationContext::class, 0);
	    }

	    public function validatorDeclaration(): ?ValidatorDeclarationContext
	    {
	    	return $this->getTypedRuleContext(ValidatorDeclarationContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncludeStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_includeStatement;
	    }

	    public function includeKw(): ?IncludeKwContext
	    {
	    	return $this->getTypedRuleContext(IncludeKwContext::class, 0);
	    }

	    public function StringLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::StringLiteral, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitIncludeStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class InlineAnnotationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_inlineAnnotation;
	    }

	    public function AT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::AT, 0);
	    }

	    public function annotationKey(): ?AnnotationKeyContext
	    {
	    	return $this->getTypedRuleContext(AnnotationKeyContext::class, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::EQUAL, 0);
	    }

	    public function StringLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::StringLiteral, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitInlineAnnotation($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TargetedAnnotationStatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_targetedAnnotationStatement;
	    }

	    public function AT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::AT, 0);
	    }

	    public function annotationKey(): ?AnnotationKeyContext
	    {
	    	return $this->getTypedRuleContext(AnnotationKeyContext::class, 0);
	    }

	    public function onKw(): ?OnKwContext
	    {
	    	return $this->getTypedRuleContext(OnKwContext::class, 0);
	    }

	    public function annotationTarget(): ?AnnotationTargetContext
	    {
	    	return $this->getTypedRuleContext(AnnotationTargetContext::class, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::EQUAL, 0);
	    }

	    public function StringLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::StringLiteral, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitTargetedAnnotationStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AnnotationKeyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_annotationKey;
	    }

	    /**
	     * @return array<IdentifierContext>|IdentifierContext|null
	     */
	    public function identifier(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IdentifierContext::class);
	    	}

	        return $this->getTypedRuleContext(IdentifierContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function DOT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::DOT);
	    	}

	        return $this->getToken(ScedelParser::DOT, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitAnnotationKey($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AnnotationTargetContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_annotationTarget;
	    }

	    /**
	     * @return array<IdentifierContext>|IdentifierContext|null
	     */
	    public function identifier(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IdentifierContext::class);
	    	}

	        return $this->getTypedRuleContext(IdentifierContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function DOT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::DOT);
	    	}

	        return $this->getToken(ScedelParser::DOT, $index);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RBRACE, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::COMMA);
	    	}

	        return $this->getToken(ScedelParser::COMMA, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitAnnotationTarget($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_typeDeclaration;
	    }

	    public function typeKw(): ?TypeKwContext
	    {
	    	return $this->getTypedRuleContext(TypeKwContext::class, 0);
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::EQUAL, 0);
	    }

	    public function typeExpr(): ?TypeExprContext
	    {
	    	return $this->getTypedRuleContext(TypeExprContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitTypeDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValidatorDeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_validatorDeclaration;
	    }

	    public function validatorKw(): ?ValidatorKwContext
	    {
	    	return $this->getTypedRuleContext(ValidatorKwContext::class, 0);
	    }

	    /**
	     * @return array<IdentifierContext>|IdentifierContext|null
	     */
	    public function identifier(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IdentifierContext::class);
	    	}

	        return $this->getTypedRuleContext(IdentifierContext::class, $index);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RPAREN, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::EQUAL, 0);
	    }

	    public function validatorBody(): ?ValidatorBodyContext
	    {
	    	return $this->getTypedRuleContext(ValidatorBodyContext::class, 0);
	    }

	    public function COMMA(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::COMMA, 0);
	    }

	    public function paramList(): ?ParamListContext
	    {
	    	return $this->getTypedRuleContext(ParamListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitValidatorDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_typeExpr;
	    }

	    public function unionExpr(): ?UnionExprContext
	    {
	    	return $this->getTypedRuleContext(UnionExprContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitTypeExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnionExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_unionExpr;
	    }

	    /**
	     * @return array<IntersectExprContext>|IntersectExprContext|null
	     */
	    public function intersectExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IntersectExprContext::class);
	    	}

	        return $this->getTypedRuleContext(IntersectExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function PIPE(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::PIPE);
	    	}

	        return $this->getToken(ScedelParser::PIPE, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitUnionExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IntersectExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_intersectExpr;
	    }

	    /**
	     * @return array<PostfixExprContext>|PostfixExprContext|null
	     */
	    public function postfixExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(PostfixExprContext::class);
	    	}

	        return $this->getTypedRuleContext(PostfixExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function AMP(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::AMP);
	    	}

	        return $this->getToken(ScedelParser::AMP, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitIntersectExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PostfixExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_postfixExpr;
	    }

	    public function atomExpr(): ?AtomExprContext
	    {
	    	return $this->getTypedRuleContext(AtomExprContext::class, 0);
	    }

	    /**
	     * @return array<ArraySuffixContext>|ArraySuffixContext|null
	     */
	    public function arraySuffix(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ArraySuffixContext::class);
	    	}

	        return $this->getTypedRuleContext(ArraySuffixContext::class, $index);
	    }

	    public function nullableSuffix(): ?NullableSuffixContext
	    {
	    	return $this->getTypedRuleContext(NullableSuffixContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitPostfixExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NullableSuffixContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_nullableSuffix;
	    }

	    public function QMARK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::QMARK, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitNullableSuffix($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AbsentKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_absentKw;
	    }

	    public function ABSENT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ABSENT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitAbsentKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AtomExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_atomExpr;
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function absentKw(): ?AbsentKwContext
	    {
	    	return $this->getTypedRuleContext(AbsentKwContext::class, 0);
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RPAREN, 0);
	    }

	    public function constraintList(): ?ConstraintListContext
	    {
	    	return $this->getTypedRuleContext(ConstraintListContext::class, 0);
	    }

	    public function recordType(): ?RecordTypeContext
	    {
	    	return $this->getTypedRuleContext(RecordTypeContext::class, 0);
	    }

	    public function dictType(): ?DictTypeContext
	    {
	    	return $this->getTypedRuleContext(DictTypeContext::class, 0);
	    }

	    public function conditionalType(): ?ConditionalTypeContext
	    {
	    	return $this->getTypedRuleContext(ConditionalTypeContext::class, 0);
	    }

	    public function typeExpr(): ?TypeExprContext
	    {
	    	return $this->getTypedRuleContext(TypeExprContext::class, 0);
	    }

	    public function nullableBaseOrId(): ?NullableBaseOrIdContext
	    {
	    	return $this->getTypedRuleContext(NullableBaseOrIdContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitAtomExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NullableBaseOrIdContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_nullableBaseOrId;
	    }

	    public function QMARK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::QMARK, 0);
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitNullableBaseOrId($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArraySuffixContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_arraySuffix;
	    }

	    public function LBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LBRACK, 0);
	    }

	    public function RBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RBRACK, 0);
	    }

	    public function constraintList(): ?ConstraintListContext
	    {
	    	return $this->getTypedRuleContext(ConstraintListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitArraySuffix($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RecordTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_recordType;
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LBRACE, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RBRACE, 0);
	    }

	    public function fieldList(): ?FieldListContext
	    {
	    	return $this->getTypedRuleContext(FieldListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitRecordType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FieldListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_fieldList;
	    }

	    /**
	     * @return array<FieldDeclContext>|FieldDeclContext|null
	     */
	    public function fieldDecl(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(FieldDeclContext::class);
	    	}

	        return $this->getTypedRuleContext(FieldDeclContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::COMMA);
	    	}

	        return $this->getToken(ScedelParser::COMMA, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitFieldList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FieldDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_fieldDecl;
	    }

	    public function field(): ?FieldContext
	    {
	    	return $this->getTypedRuleContext(FieldContext::class, 0);
	    }

	    /**
	     * @return array<InlineAnnotationContext>|InlineAnnotationContext|null
	     */
	    public function inlineAnnotation(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(InlineAnnotationContext::class);
	    	}

	        return $this->getTypedRuleContext(InlineAnnotationContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitFieldDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FieldContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_field;
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::COLON, 0);
	    }

	    public function typeExpr(): ?TypeExprContext
	    {
	    	return $this->getTypedRuleContext(TypeExprContext::class, 0);
	    }

	    public function QMARK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::QMARK, 0);
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::DEFAULT, 0);
	    }

	    public function defaultExpr(): ?DefaultExprContext
	    {
	    	return $this->getTypedRuleContext(DefaultExprContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitField($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DefaultExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_defaultExpr;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitDefaultExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NullKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_nullKw;
	    }

	    public function NULL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::NULL, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitNullKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DictKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_dictKw;
	    }

	    public function DICT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::DICT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitDictKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DictTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_dictType;
	    }

	    public function dictKw(): ?DictKwContext
	    {
	    	return $this->getTypedRuleContext(DictKwContext::class, 0);
	    }

	    public function LBRACE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LBRACE, 0);
	    }

	    /**
	     * @return array<TypeExprContext>|TypeExprContext|null
	     */
	    public function typeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeExprContext::class, $index);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::COLON, 0);
	    }

	    public function RBRACE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RBRACE, 0);
	    }

	    public function LESS(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LESS, 0);
	    }

	    public function COMMA(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::COMMA, 0);
	    }

	    public function MOR(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::MOR, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitDictType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class WhenKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_whenKw;
	    }

	    public function WHEN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::WHEN, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitWhenKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ThenKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_thenKw;
	    }

	    public function THEN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::THEN, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitThenKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ElseKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_elseKw;
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ELSE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitElseKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConditionalTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_conditionalType;
	    }

	    public function whenKw(): ?WhenKwContext
	    {
	    	return $this->getTypedRuleContext(WhenKwContext::class, 0);
	    }

	    public function condExpr(): ?CondExprContext
	    {
	    	return $this->getTypedRuleContext(CondExprContext::class, 0);
	    }

	    public function thenKw(): ?ThenKwContext
	    {
	    	return $this->getTypedRuleContext(ThenKwContext::class, 0);
	    }

	    /**
	     * @return array<TypeExprContext>|TypeExprContext|null
	     */
	    public function typeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeExprContext::class, $index);
	    }

	    public function elseKw(): ?ElseKwContext
	    {
	    	return $this->getTypedRuleContext(ElseKwContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitConditionalType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CondExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_condExpr;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitCondExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PredicateContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_predicate;
	    }

	    public function predicateOrExpr(): ?PredicateOrExprContext
	    {
	    	return $this->getTypedRuleContext(PredicateOrExprContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitPredicate($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MatchesKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_matchesKw;
	    }

	    public function MATCHES(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::MATCHES, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitMatchesKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AndKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_andKw;
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::AND, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitAndKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OrKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_orKw;
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::OR, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitOrKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class NotKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_notKw;
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::NOT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitNotKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PredicateOrExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_predicateOrExpr;
	    }

	    /**
	     * @return array<PredicateAndExprContext>|PredicateAndExprContext|null
	     */
	    public function predicateAndExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(PredicateAndExprContext::class);
	    	}

	        return $this->getTypedRuleContext(PredicateAndExprContext::class, $index);
	    }

	    /**
	     * @return array<OrKwContext>|OrKwContext|null
	     */
	    public function orKw(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(OrKwContext::class);
	    	}

	        return $this->getTypedRuleContext(OrKwContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitPredicateOrExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PredicateAndExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_predicateAndExpr;
	    }

	    /**
	     * @return array<PredicateNotExprContext>|PredicateNotExprContext|null
	     */
	    public function predicateNotExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(PredicateNotExprContext::class);
	    	}

	        return $this->getTypedRuleContext(PredicateNotExprContext::class, $index);
	    }

	    /**
	     * @return array<AndKwContext>|AndKwContext|null
	     */
	    public function andKw(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AndKwContext::class);
	    	}

	        return $this->getTypedRuleContext(AndKwContext::class, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitPredicateAndExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PredicateNotExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_predicateNotExpr;
	    }

	    public function notKw(): ?NotKwContext
	    {
	    	return $this->getTypedRuleContext(NotKwContext::class, 0);
	    }

	    public function predicateNotExpr(): ?PredicateNotExprContext
	    {
	    	return $this->getTypedRuleContext(PredicateNotExprContext::class, 0);
	    }

	    public function predicatePrimaryExpr(): ?PredicatePrimaryExprContext
	    {
	    	return $this->getTypedRuleContext(PredicatePrimaryExprContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitPredicateNotExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PredicatePrimaryExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_predicatePrimaryExpr;
	    }

	    /**
	     * @return array<AdditiveExprContext>|AdditiveExprContext|null
	     */
	    public function additiveExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AdditiveExprContext::class);
	    	}

	        return $this->getTypedRuleContext(AdditiveExprContext::class, $index);
	    }

	    public function compareOp(): ?CompareOpContext
	    {
	    	return $this->getTypedRuleContext(CompareOpContext::class, 0);
	    }

	    public function matchesKw(): ?MatchesKwContext
	    {
	    	return $this->getTypedRuleContext(MatchesKwContext::class, 0);
	    }

	    public function RegexLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RegexLiteral, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitPredicatePrimaryExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_expression;
	    }

	    public function predicate(): ?PredicateContext
	    {
	    	return $this->getTypedRuleContext(PredicateContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AdditiveExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_additiveExpr;
	    }

	    /**
	     * @return array<MultiplicativeExprContext>|MultiplicativeExprContext|null
	     */
	    public function multiplicativeExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MultiplicativeExprContext::class);
	    	}

	        return $this->getTypedRuleContext(MultiplicativeExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function PLUS(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::PLUS);
	    	}

	        return $this->getToken(ScedelParser::PLUS, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function MINUS(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::MINUS);
	    	}

	        return $this->getToken(ScedelParser::MINUS, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitAdditiveExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MultiplicativeExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_multiplicativeExpr;
	    }

	    /**
	     * @return array<UnaryExprContext>|UnaryExprContext|null
	     */
	    public function unaryExpr(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UnaryExprContext::class);
	    	}

	        return $this->getTypedRuleContext(UnaryExprContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function STAR(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::STAR);
	    	}

	        return $this->getToken(ScedelParser::STAR, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function SLASH(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::SLASH);
	    	}

	        return $this->getToken(ScedelParser::SLASH, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitMultiplicativeExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_unaryExpr;
	    }

	    public function unaryExpr(): ?UnaryExprContext
	    {
	    	return $this->getTypedRuleContext(UnaryExprContext::class, 0);
	    }

	    public function PLUS(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::PLUS, 0);
	    }

	    public function MINUS(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::MINUS, 0);
	    }

	    public function valueExpr(): ?ValueExprContext
	    {
	    	return $this->getTypedRuleContext(ValueExprContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitUnaryExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValueExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_valueExpr;
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function path(): ?PathContext
	    {
	    	return $this->getTypedRuleContext(PathContext::class, 0);
	    }

	    public function functionCall(): ?FunctionCallContext
	    {
	    	return $this->getTypedRuleContext(FunctionCallContext::class, 0);
	    }

	    public function emptyArrayExpr(): ?EmptyArrayExprContext
	    {
	    	return $this->getTypedRuleContext(EmptyArrayExprContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LPAREN, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RPAREN, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitValueExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_functionCall;
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RPAREN, 0);
	    }

	    public function expressionList(): ?ExpressionListContext
	    {
	    	return $this->getTypedRuleContext(ExpressionListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitFunctionCall($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_expressionList;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::COMMA);
	    	}

	        return $this->getToken(ScedelParser::COMMA, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitExpressionList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EmptyArrayExprContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_emptyArrayExpr;
	    }

	    public function LBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LBRACK, 0);
	    }

	    public function RBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RBRACK, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitEmptyArrayExpr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ThisKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_thisKw;
	    }

	    public function THIS(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::THIS, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitThisKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParentKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_parentKw;
	    }

	    public function PARENT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::PARENT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitParentKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RootKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_rootKw;
	    }

	    public function ROOT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ROOT, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitRootKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PathContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_path;
	    }

	    public function thisKw(): ?ThisKwContext
	    {
	    	return $this->getTypedRuleContext(ThisKwContext::class, 0);
	    }

	    public function parentKw(): ?ParentKwContext
	    {
	    	return $this->getTypedRuleContext(ParentKwContext::class, 0);
	    }

	    public function rootKw(): ?RootKwContext
	    {
	    	return $this->getTypedRuleContext(RootKwContext::class, 0);
	    }

	    public function VariableIdentifier(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::VariableIdentifier, 0);
	    }

	    /**
	     * @return array<IdentifierContext>|IdentifierContext|null
	     */
	    public function identifier(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IdentifierContext::class);
	    	}

	        return $this->getTypedRuleContext(IdentifierContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function DOT(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::DOT);
	    	}

	        return $this->getToken(ScedelParser::DOT, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitPath($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CompareOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_compareOp;
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::EQUAL, 0);
	    }

	    public function NOT_EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::NOT_EQUAL, 0);
	    }

	    public function LESS(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LESS, 0);
	    }

	    public function LESS_OR_EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LESS_OR_EQUAL, 0);
	    }

	    public function MOR(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::MOR, 0);
	    }

	    public function MORE_OR_EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::MORE_OR_EQUAL, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitCompareOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_paramList;
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::COMMA);
	    	}

	        return $this->getToken(ScedelParser::COMMA, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitParamList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_param;
	    }

	    /**
	     * @return array<IdentifierContext>|IdentifierContext|null
	     */
	    public function identifier(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(IdentifierContext::class);
	    	}

	        return $this->getTypedRuleContext(IdentifierContext::class, $index);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::COLON, 0);
	    }

	    public function EQUAL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::EQUAL, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitParam($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValidatorBodyContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_validatorBody;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitValidatorBody($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstraintListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_constraintList;
	    }

	    /**
	     * @return array<ConstraintContext>|ConstraintContext|null
	     */
	    public function constraint(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ConstraintContext::class);
	    	}

	        return $this->getTypedRuleContext(ConstraintContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::COMMA);
	    	}

	        return $this->getToken(ScedelParser::COMMA, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitConstraintList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstraintContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_constraint;
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::COLON, 0);
	    }

	    public function argValue(): ?ArgValueContext
	    {
	    	return $this->getTypedRuleContext(ArgValueContext::class, 0);
	    }

	    public function LPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LPAREN, 0);
	    }

	    public function RPAREN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RPAREN, 0);
	    }

	    public function notKw(): ?NotKwContext
	    {
	    	return $this->getTypedRuleContext(NotKwContext::class, 0);
	    }

	    public function constraintCallArgList(): ?ConstraintCallArgListContext
	    {
	    	return $this->getTypedRuleContext(ConstraintCallArgListContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitConstraint($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstraintCallArgListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_constraintCallArgList;
	    }

	    /**
	     * @return array<ConstraintCallArgContext>|ConstraintCallArgContext|null
	     */
	    public function constraintCallArg(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ConstraintCallArgContext::class);
	    	}

	        return $this->getTypedRuleContext(ConstraintCallArgContext::class, $index);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::COMMA);
	    	}

	        return $this->getToken(ScedelParser::COMMA, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitConstraintCallArgList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstraintCallArgContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_constraintCallArg;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function identifier(): ?IdentifierContext
	    {
	    	return $this->getTypedRuleContext(IdentifierContext::class, 0);
	    }

	    public function COLON(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::COLON, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitConstraintCallArg($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArgValueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_argValue;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

	    public function LBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::LBRACK, 0);
	    }

	    public function RBRACK(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::RBRACK, 0);
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function COMMA(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(ScedelParser::COMMA);
	    	}

	        return $this->getToken(ScedelParser::COMMA, $index);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitArgValue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TrueKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_trueKw;
	    }

	    public function TRUE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::TRUE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitTrueKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FalseKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_falseKw;
	    }

	    public function FALSE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::FALSE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitFalseKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_literal;
	    }

	    public function DurationLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::DurationLiteral, 0);
	    }

	    public function StringLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::StringLiteral, 0);
	    }

	    public function VersionLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::VersionLiteral, 0);
	    }

	    public function NumberLiteral(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::NumberLiteral, 0);
	    }

	    public function UnsignedInt(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::UnsignedInt, 0);
	    }

	    public function trueKw(): ?TrueKwContext
	    {
	    	return $this->getTypedRuleContext(TrueKwContext::class, 0);
	    }

	    public function falseKw(): ?FalseKwContext
	    {
	    	return $this->getTypedRuleContext(FalseKwContext::class, 0);
	    }

	    public function nullKw(): ?NullKwContext
	    {
	    	return $this->getTypedRuleContext(NullKwContext::class, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdentifierContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_identifier;
	    }

	    public function Identifier(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::Identifier, 0);
	    }

	    public function SCedelVersionKw(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::SCedelVersionKw, 0);
	    }

	    public function INCLUDE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::INCLUDE, 0);
	    }

	    public function TYPE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::TYPE, 0);
	    }

	    public function VALIDATOR(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::VALIDATOR, 0);
	    }

	    public function ABSENT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ABSENT, 0);
	    }

	    public function DEFAULT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::DEFAULT, 0);
	    }

	    public function NULL(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::NULL, 0);
	    }

	    public function DICT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::DICT, 0);
	    }

	    public function WHEN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::WHEN, 0);
	    }

	    public function THEN(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::THEN, 0);
	    }

	    public function ELSE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ELSE, 0);
	    }

	    public function MATCHES(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::MATCHES, 0);
	    }

	    public function AND(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::AND, 0);
	    }

	    public function OR(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::OR, 0);
	    }

	    public function NOT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::NOT, 0);
	    }

	    public function THIS(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::THIS, 0);
	    }

	    public function PARENT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::PARENT, 0);
	    }

	    public function ROOT(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ROOT, 0);
	    }

	    public function ON(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ON, 0);
	    }

	    public function TRUE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::TRUE, 0);
	    }

	    public function FALSE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::FALSE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitIdentifier($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ScedelVersionKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_scedelVersionKw;
	    }

	    public function SCedelVersionKw(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::SCedelVersionKw, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitScedelVersionKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncludeKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_includeKw;
	    }

	    public function INCLUDE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::INCLUDE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitIncludeKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_typeKw;
	    }

	    public function TYPE(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::TYPE, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitTypeKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ValidatorKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_validatorKw;
	    }

	    public function VALIDATOR(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::VALIDATOR, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitValidatorKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class OnKwContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return ScedelParser::RULE_onKw;
	    }

	    public function ON(): ?TerminalNode
	    {
	        return $this->getToken(ScedelParser::ON, 0);
	    }

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof ScedelVisitor) {
			    return $visitor->visitOnKw($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}