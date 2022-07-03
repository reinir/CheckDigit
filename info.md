# CheckDigit
Kelas PHP untuk bikin dan periksa check digit berdasarkan [algoritma Damm](https://en.wikipedia.org/wiki/Damm_algorithm)

Methods:
- `CheckDigit::generate($input)`, bikin check digit, outputnya check digit aja
- `CheckDigit::append($input)`, bikin check digit, outputnya `$input` plus check digit langsung ditambahin di paling kanan
- `CheckDigit::validate($input)`, periksa `$input` yang udah ada check digitnya, outputnya boolean, `true` berarti valid

File `index.php` berisi contoh penggunaan (<http://reinir.id:8000/checkdigit/>)

## test

another test
