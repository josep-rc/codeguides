# Java Codeguides

## CLI

```bash
java -version
```

## Tipus primitius

| Type    | Description                                                   |
|---------|---------------------------------------------------------------|
| byte    | Stores whole numbers from -128 to 127                         |
| short   | Stores whole numbers from -32,768 to 32,767                   |
| int     | Stores whole numbers from -2,147,483,648 to 2,147,483,647     |
| long    | Stores whole numbers from -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807 |
| float   | Stores fractional numbers. Sufficient for storing 6 to 7 decimal digits |
| double  | Stores fractional numbers. Sufficient for storing 15 to 16 decimal digits |
| boolean | Stores true or false values                                   |
| char    | Stores a single character/letter or ASCII values              |

## Operadors

### Aritmetics

| Operator | Name           | Description                          | Example |
|----------|----------------|--------------------------------------|---------|
| +        | Addition       | Adds together two values             | x + y   |
| -        | Subtraction    | Subtracts one value from another     | x - y   |
| *        | Multiplication | Multiplies two values                | x * y   |
| /        | Division       | Divides one value by another         | x / y   |
| %        | Modulus        | Returns the division remainder       | x % y   |
| ++       | Increment      | Increases the value of a variable by 1 | ++x   |
| --       | Decrement      | Decreases the value of a variable by 1 | --x   |

### Assignació

| Operator | Example  | Same As       |
|----------|----------|---------------|
| =        | x = 5    | x = 5         |
| +=       | x += 3   | x = x + 3     |
| -=       | x -= 3   | x = x - 3     |
| *=       | x *= 3   | x = x * 3     |
| /=       | x /= 3   | x = x / 3     |
| %=       | x %= 3   | x = x % 3     |
| &=       | x &= 3   | x = x & 3     |
| \|=      | x \|= 3  | x = x \| 3    |
| ^=       | x ^= 3   | x = x ^ 3     |
| >>=      | x >>= 3  | x = x >> 3    |
| <<=      | x <<= 3  | x = x << 3    |

### Comparació

| Operator | Name                     | Example       |
|----------|--------------------------|---------------|
| ==       | Equal to                 | x == y        |
| !=       | Not equal                | x != y        |
| >        | Greater than             | x > y         |
| <        | Less than                | x < y         |
| >=       | Greater than or equal to | x >= y        |
| <=       | Less than or equal to    | x <= y        |

### Lògics

| Operator | Name         | Description                                   | Example                     |
|----------|--------------|-----------------------------------------------|-----------------------------|
| &&       | Logical and  | Returns true if both statements are true      | x < 5 && x < 10            |
| \|\|     | Logical or   | Returns true if one of the statements is true | x < 5 \|\| x < 4           |
| !        | Logical not  | Reverses the result, returns false if true    | !(x < 5 && x < 10)         |

