// do while
int n = 0;
do
{
    Console.WriteLine(n);
    n++;
} while (n < 5);

// while
int n = 0;
while (n < 5)
{
    Console.WriteLine(n);
    n++;
}

// for
for (int i = 0; i < 5; i++)
{
    Console.WriteLine(i);
}

// foreach
var fibNumbers = new List<int> { 0, 1, 1, 2, 3, 5, 8, 13 };
int count = 0;
foreach (int element in fibNumbers)
{
    count++;
    Console.WriteLine($"Element #{count}: {element}");
}
Console.WriteLine($"Number of elements: {count}");
