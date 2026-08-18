<?php

declare(strict_types=1);

namespace App\Core;

class Validator
{
    public function validate(array $data, array $rules): array
    {
        $errors = [];

        foreach ($rules as $field => $ruleString) {
            $fieldRules = is_string($ruleString) ? explode('|', $ruleString) : $ruleString;
            $value = $data[$field] ?? null;

            foreach ($fieldRules as $rule) {
                $error = $this->applyRule($field, $value, $rule);
                if ($error !== null) {
                    $errors[$field][] = $error;
                    break;
                }
            }
        }

        return $errors;
    }

    private function applyRule(string $field, mixed $value, string $rule): ?string
    {
        if (str_contains($rule, ':')) {
            [$ruleName, $parameter] = explode(':', $rule, 2);
        } else {
            $ruleName = $rule;
            $parameter = null;
        }

        return match ($ruleName) {
            'required' => $this->validateRequired($field, $value),
            'email'    => $this->validateEmail($field, $value),
            'min'      => $this->validateMin($field, $value, (int)$parameter),
            'max'      => $this->validateMax($field, $value, (int)$parameter),
            'numeric'  => $this->validateNumeric($field, $value),
            default    => null,
        };
    }

    private function validateRequired(string $field, mixed $value): ?string
    {
        if ($value === null || $value === '' || (is_string($value) && trim($value) === '')) {
            return "The {$field} field is required.";
        }
        return null;
    }

    private function validateEmail(string $field, mixed $value): ?string
    {
        if ($value === null || $value === '') {
            return null;
        }
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return "The {$field} must be a valid email address.";
        }
        return null;
    }

    private function validateMin(string $field, mixed $value, int $min): ?string
    {
        if ($value === null || $value === '') {
            return null;
        }
        if (is_string($value) && strlen($value) < $min) {
            return "The {$field} must be at least {$min} characters.";
        }
        if (is_numeric($value) && $value < $min) {
            return "The {$field} must be at least {$min}.";
        }
        return null;
    }

    private function validateMax(string $field, mixed $value, int $max): ?string
    {
        if ($value === null || $value === '') {
            return null;
        }
        if (is_string($value) && strlen($value) > $max) {
            return "The {$field} must not exceed {$max} characters.";
        }
        if (is_numeric($value) && $value > $max) {
            return "The {$field} must not exceed {$max}.";
        }
        return null;
    }

    private function validateNumeric(string $field, mixed $value): ?string
    {
        if ($value === null || $value === '') {
            return null;
        }
        if (!is_numeric($value)) {
            return "The {$field} must be a number.";
        }
        return null;
    }
}
