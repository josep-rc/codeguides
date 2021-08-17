Obre web de documentació per dotnet new:
`dotnet help new`

Display templates available: 
`dotnet new -l`

Crea una nova aplicació de consola:
`dotnet new console`

Docs per dotnet new console:
`dotnet new console -h`

Display .NET Core information:
`dotnet --info`

Display the installed SDKs:
`dotnet --list-sdks`

Display the installed runtimes:
`dotnet --list-runtimes`

Crea solución en el directorio actual:
`dotnet new sln`

Lista proyectos en la solución:
`dotnet sln list`

Añade proyecto a la solución:
`dotnet sln add path/projectname.csproj`

Quite proyecto a la solución:
`dotnet sln remove path/projectname.csproj`

Añade referencia a otro proyecto:
`dotnet add reference path/projectname.csproj`

Quita referencia:
`dotnet remove reference path/projectname.csproj`

Crea proyecto de tests:
`dotnet new xunit -o projectname.Tests`

Añade proyecto de tests a la solucióm:
`dotnet sln add ./projectname.Tests/projectname.Tests.csproj`
