h		: izquerda
j		: abajo
k		: arriba
l		: derecha
ESC	: Salir del modo edición
:q! : Salir sin guardar
:wq	: Guardar y salir
x		: Borra el caracter bajo el cursor
i		: Entrar en modo edición
d$	: Borra hasta el final de la línea
dw	: Borra hasta el final de la palabra
dd	: Borra la línea entera
u		: Deshacer
U		: Deshacer todos los cambios en la línea
Ctrl+R	: Rehacer
p		: Pegar lo borrado
r		: Replace, sustituye el carácter bajo el cursor
cw	: Change word, cambiar palabra a partir del cursor
c$	: Cambiar hasta fin de línea (borra hasta fin de línea y entra en modo insert)
CTRL+g	: Ver estado del fichero
G		: Ir al final del fichero
gg	: Ir al inicio del fichero
/		: Buscar
?		: Buscar hacia arriba
n		: Buscar siguiente
N		: Buscar anterior
%		: Ir a la pareja de {([])}
:s/laas/las	: Sustituir primera aparición de palabra
:1,7s/viejo/nuevo/g	: Cambia todas las apariciones entre dos lineas
:%s/viejo/nuevo/g		: Cambia todas las apariciones en el documento
:!	: Ejecutar comando de terminal
:w file	: Guarda archivo con nombre
:2,7 w file	: Guarda una parte del fichero (lineas 2 a 7)
:r file	: Insertar el contenido de un fichero
:o	: Inserta linea debajo y entra en modo insert
:O	: Inserta línea encima y entra en modo insert
a		: Insertar después del cursor
A		: Insertar al final de la línea
R		: Replace, editar reemplazando en lugar de insertando
:set	: Fijar opción

