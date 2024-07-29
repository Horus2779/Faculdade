/*
 
Lucivaldo dos Santos Mielo Junior RA:220020411
Calcular Numeros Primos
*/

void setup() {
  Serial.begin(9600);
}

void loop() {
  int cont = 0,divi;

  for (int num = 2; num <= 100; num++) {
    for (divi = 2; divi <= num; divi++) {
      if (num % divi == 0) {
        break;
      }
    }
    if (divi == num) { // Se divi == num, então o número é primo
      Serial.println(num);
      cont++;
    }
  }

  Serial.print("Total de numeros primos: ");
  Serial.println(cont);
  delay(2000);
}
