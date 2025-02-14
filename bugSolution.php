function foo(int $a, int $b): int {
  if (!is_int($a) || !is_int($b)) {
    throw new InvalidArgumentException('Arguments must be integers');
  }
  return $a + $b;
}
