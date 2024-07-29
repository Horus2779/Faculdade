/*
 
Lucivaldo dos Santos Mielo Junior RA:220020411
Pisca o LED Azul da placa (pino 2)
*/
const int pino_led = 2; //pino onde o LED está conectado
void setup() {
  // configura o pino com o LED como saída
  pinMode(pino_led, OUTPUT); //pino 13
}

void loop() {
  digitalWrite(pino_led, HIGH); //acende o LED
  delay(50); // aguarda 1 segundo
  digitalWrite(pino_led, LOW); //apaga o LED
  delay(500);
}
