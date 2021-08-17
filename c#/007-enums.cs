// https://docs.microsoft.com/es-es/dotnet/api/system.enum?view=netcore-3.1#examples
// es un tipo de valor definido por un conjunto de constantes
// con nombre del tipo numérico integral subyacente
// System.Enum
enum Season
{
    Spring, // 0
    Summer, // 1
    Autumn, // 2
    Winter  // 3
}
Season a = Season.Autumn;
Console.WriteLine($"Integral value of {a} is {(int)a}");
// output: Integral value of Autumn is 2

var b = (Season)1; // b=Summer

// Puede especificar cualquier otro tipo de numérico entero
enum ErrorCode : ushort
{
    None = 0,
    Unknown = 1,
    ConnectionLost = 100,
    OutlierReading = 200
}

// Para representar una combinación de opciones, 
// defina un tipo de enumeración como marcas de bits
// y añada el atributo [Flags]
[Flags]
public enum Days
{
    None      = 0b_0000_0000,  // 0
    Monday    = 0b_0000_0001,  // 1
    Tuesday   = 0b_0000_0010,  // 2
    Wednesday = 0b_0000_0100,  // 4
    Thursday  = 0b_0000_1000,  // 8
    Friday    = 0b_0001_0000,  // 16
    Saturday  = 0b_0010_0000,  // 32
    Sunday    = 0b_0100_0000,  // 64
    Weekend   = Saturday | Sunday
}

Days meetingDays = Days.Monday | Days.Wednesday | Days.Friday;
Console.WriteLine(meetingDays);
// Output:
// Monday, Wednesday, Friday

Days workingFromHomeDays = Days.Thursday | Days.Friday;
Console.WriteLine($"Join a meeting by phone on {meetingDays & workingFromHomeDays}");
// Output:
// Join a meeting by phone on Friday

bool isMeetingOnTuesday = (meetingDays & Days.Tuesday) == Days.Tuesday;
Console.WriteLine($"Is there a meeting on Tuesday: {isMeetingOnTuesday}");
// Output:
// Is there a meeting on Tuesday: False

var a = (Days)37; // 0010_0101
Console.WriteLine(a);
// Output:
// Monday, Wednesday, Saturday
