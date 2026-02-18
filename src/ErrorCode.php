<?php

declare(strict_types=1);

namespace Scedel;

enum ErrorCode: string
{
    case InvalidExpression = 'InvalidExpression';
    case InvalidVersionDirective = 'InvalidVersionDirective';
    case IncludeNotFound = 'IncludeNotFound';
    case RelativeIncludeRequiresBase = 'RelativeIncludeRequiresBase';
    case CyclicInclude = 'CyclicInclude';
    case TypeRedeclared = 'TypeRedeclared';
    case ValidatorRedeclared = 'ValidatorRedeclared';
    case ReservedValidatorName = 'ReservedValidatorName';
    case TypeMismatch = 'TypeMismatch';
    case InvalidArithmetic = 'InvalidArithmetic';
    case InvalidAnnotationTarget = 'InvalidAnnotationTarget';
    case IncompatibleScedelVersion = 'IncompatibleScedelVersion';
    case UnknownType = 'UnknownType';
    case UnknownConstraint = 'UnknownConstraint';
    case MissingArgument = 'MissingArgument';
    case DuplicateArgument = 'DuplicateArgument';
    case TooManyArguments = 'TooManyArguments';
    case UnknownArgumentName = 'UnknownArgumentName';
    case InvalidTypeUsage = 'InvalidTypeUsage';
    case ThisUndefined = 'ThisUndefined';
    case ConstraintViolation = 'ConstraintViolation';
    case ValidatorFailed = 'ValidatorFailed';
    case FieldMustBeAbsent = 'FieldMustBeAbsent';
    case FieldMissing = 'FieldMissing';
    case UnknownField = 'UnknownField';
    case ParentUndefined = 'ParentUndefined';

    public static function coerce(self|string $value): self
    {
        return $value instanceof self ? $value : self::from($value);
    }
}
