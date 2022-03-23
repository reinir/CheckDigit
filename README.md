# CheckDigit
Kelas PHP untuk bikin dan periksa check digit berdasarkan [algoritma Damm](https://en.wikipedia.org/wiki/Damm_algorithm)

Methods:
- `CheckDigit::generate($digits)`, bikin check digit, outputnya check digit aja
- `CheckDigit::append($digits)`, bikin check digit, outputnya digits plus check digit langsung ditambahin di paling kanan
- `CheckDigit::validate($digits)`, periksa check digit, outputnya boolean, `true` berarti valid
