<?php

/*
 * Generated from Scedel.g4 by ANTLR 4.13.2
 */

namespace Scedel\Generated;

use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;

/**
 * This interface defines a complete generic visitor for a parse tree produced by {@see ScedelParser}.
 */
interface ScedelVisitor extends ParseTreeVisitor
{
	/**
	 * Visit a parse tree produced by {@see ScedelParser::file()}.
	 *
	 * @param Context\FileContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFile(Context\FileContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::versionDirective()}.
	 *
	 * @param Context\VersionDirectiveContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitVersionDirective(Context\VersionDirectiveContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::fileItem()}.
	 *
	 * @param Context\FileItemContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFileItem(Context\FileItemContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::annotatedDecl()}.
	 *
	 * @param Context\AnnotatedDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnnotatedDecl(Context\AnnotatedDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::decl()}.
	 *
	 * @param Context\DeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDecl(Context\DeclContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::includeStatement()}.
	 *
	 * @param Context\IncludeStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncludeStatement(Context\IncludeStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::inlineAnnotation()}.
	 *
	 * @param Context\InlineAnnotationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitInlineAnnotation(Context\InlineAnnotationContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::targetedAnnotationStatement()}.
	 *
	 * @param Context\TargetedAnnotationStatementContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTargetedAnnotationStatement(Context\TargetedAnnotationStatementContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::annotationKey()}.
	 *
	 * @param Context\AnnotationKeyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnnotationKey(Context\AnnotationKeyContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::annotationTarget()}.
	 *
	 * @param Context\AnnotationTargetContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAnnotationTarget(Context\AnnotationTargetContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::typeDeclaration()}.
	 *
	 * @param Context\TypeDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeDeclaration(Context\TypeDeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::validatorDeclaration()}.
	 *
	 * @param Context\ValidatorDeclarationContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValidatorDeclaration(Context\ValidatorDeclarationContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::typeExpr()}.
	 *
	 * @param Context\TypeExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeExpr(Context\TypeExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::unionExpr()}.
	 *
	 * @param Context\UnionExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnionExpr(Context\UnionExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::intersectExpr()}.
	 *
	 * @param Context\IntersectExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIntersectExpr(Context\IntersectExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::postfixExpr()}.
	 *
	 * @param Context\PostfixExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPostfixExpr(Context\PostfixExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::nullableSuffix()}.
	 *
	 * @param Context\NullableSuffixContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNullableSuffix(Context\NullableSuffixContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::absentKw()}.
	 *
	 * @param Context\AbsentKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAbsentKw(Context\AbsentKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::atomExpr()}.
	 *
	 * @param Context\AtomExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAtomExpr(Context\AtomExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::nullableBaseOrId()}.
	 *
	 * @param Context\NullableBaseOrIdContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNullableBaseOrId(Context\NullableBaseOrIdContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::arraySuffix()}.
	 *
	 * @param Context\ArraySuffixContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArraySuffix(Context\ArraySuffixContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::recordType()}.
	 *
	 * @param Context\RecordTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRecordType(Context\RecordTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::fieldList()}.
	 *
	 * @param Context\FieldListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFieldList(Context\FieldListContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::fieldDecl()}.
	 *
	 * @param Context\FieldDeclContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFieldDecl(Context\FieldDeclContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::field()}.
	 *
	 * @param Context\FieldContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitField(Context\FieldContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::defaultExpr()}.
	 *
	 * @param Context\DefaultExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDefaultExpr(Context\DefaultExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::nullKw()}.
	 *
	 * @param Context\NullKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNullKw(Context\NullKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::dictKw()}.
	 *
	 * @param Context\DictKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDictKw(Context\DictKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::dictType()}.
	 *
	 * @param Context\DictTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitDictType(Context\DictTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::whenKw()}.
	 *
	 * @param Context\WhenKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitWhenKw(Context\WhenKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::thenKw()}.
	 *
	 * @param Context\ThenKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitThenKw(Context\ThenKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::elseKw()}.
	 *
	 * @param Context\ElseKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitElseKw(Context\ElseKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::conditionalType()}.
	 *
	 * @param Context\ConditionalTypeContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConditionalType(Context\ConditionalTypeContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::condExpr()}.
	 *
	 * @param Context\CondExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCondExpr(Context\CondExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::predicate()}.
	 *
	 * @param Context\PredicateContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPredicate(Context\PredicateContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::matchesKw()}.
	 *
	 * @param Context\MatchesKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMatchesKw(Context\MatchesKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::andKw()}.
	 *
	 * @param Context\AndKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAndKw(Context\AndKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::orKw()}.
	 *
	 * @param Context\OrKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOrKw(Context\OrKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::notKw()}.
	 *
	 * @param Context\NotKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitNotKw(Context\NotKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::predicateOrExpr()}.
	 *
	 * @param Context\PredicateOrExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPredicateOrExpr(Context\PredicateOrExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::predicateAndExpr()}.
	 *
	 * @param Context\PredicateAndExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPredicateAndExpr(Context\PredicateAndExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::predicateNotExpr()}.
	 *
	 * @param Context\PredicateNotExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPredicateNotExpr(Context\PredicateNotExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::predicatePrimaryExpr()}.
	 *
	 * @param Context\PredicatePrimaryExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPredicatePrimaryExpr(Context\PredicatePrimaryExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::expression()}.
	 *
	 * @param Context\ExpressionContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpression(Context\ExpressionContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::additiveExpr()}.
	 *
	 * @param Context\AdditiveExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitAdditiveExpr(Context\AdditiveExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::multiplicativeExpr()}.
	 *
	 * @param Context\MultiplicativeExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitMultiplicativeExpr(Context\MultiplicativeExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::unaryExpr()}.
	 *
	 * @param Context\UnaryExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitUnaryExpr(Context\UnaryExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::valueExpr()}.
	 *
	 * @param Context\ValueExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValueExpr(Context\ValueExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::functionCall()}.
	 *
	 * @param Context\FunctionCallContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFunctionCall(Context\FunctionCallContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::expressionList()}.
	 *
	 * @param Context\ExpressionListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitExpressionList(Context\ExpressionListContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::emptyArrayExpr()}.
	 *
	 * @param Context\EmptyArrayExprContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitEmptyArrayExpr(Context\EmptyArrayExprContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::thisKw()}.
	 *
	 * @param Context\ThisKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitThisKw(Context\ThisKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::parentKw()}.
	 *
	 * @param Context\ParentKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParentKw(Context\ParentKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::rootKw()}.
	 *
	 * @param Context\RootKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitRootKw(Context\RootKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::path()}.
	 *
	 * @param Context\PathContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitPath(Context\PathContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::compareOp()}.
	 *
	 * @param Context\CompareOpContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitCompareOp(Context\CompareOpContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::paramList()}.
	 *
	 * @param Context\ParamListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParamList(Context\ParamListContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::param()}.
	 *
	 * @param Context\ParamContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitParam(Context\ParamContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::validatorBody()}.
	 *
	 * @param Context\ValidatorBodyContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValidatorBody(Context\ValidatorBodyContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::constraintList()}.
	 *
	 * @param Context\ConstraintListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstraintList(Context\ConstraintListContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::constraint()}.
	 *
	 * @param Context\ConstraintContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstraint(Context\ConstraintContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::constraintCallArgList()}.
	 *
	 * @param Context\ConstraintCallArgListContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstraintCallArgList(Context\ConstraintCallArgListContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::constraintCallArg()}.
	 *
	 * @param Context\ConstraintCallArgContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitConstraintCallArg(Context\ConstraintCallArgContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::argValue()}.
	 *
	 * @param Context\ArgValueContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitArgValue(Context\ArgValueContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::trueKw()}.
	 *
	 * @param Context\TrueKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTrueKw(Context\TrueKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::falseKw()}.
	 *
	 * @param Context\FalseKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitFalseKw(Context\FalseKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::literal()}.
	 *
	 * @param Context\LiteralContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitLiteral(Context\LiteralContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::identifier()}.
	 *
	 * @param Context\IdentifierContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIdentifier(Context\IdentifierContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::scedelVersionKw()}.
	 *
	 * @param Context\ScedelVersionKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitScedelVersionKw(Context\ScedelVersionKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::includeKw()}.
	 *
	 * @param Context\IncludeKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitIncludeKw(Context\IncludeKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::typeKw()}.
	 *
	 * @param Context\TypeKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitTypeKw(Context\TypeKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::validatorKw()}.
	 *
	 * @param Context\ValidatorKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitValidatorKw(Context\ValidatorKwContext $context);

	/**
	 * Visit a parse tree produced by {@see ScedelParser::onKw()}.
	 *
	 * @param Context\OnKwContext $context The parse tree.
	 *
	 * @return mixed The visitor result.
	 */
	public function visitOnKw(Context\OnKwContext $context);
}