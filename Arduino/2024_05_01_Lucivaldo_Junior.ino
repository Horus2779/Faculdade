/*
 
Lucivaldo dos Santos Mielo Junior RA:220020411
Alterar Luminosidade do LED atraves de Potenciometro
*/
const int potenciometroPin = A0;  //Pino conectado ao Potenciomentro
const int ledPin = 9;   //Pino conectado ao Led 

void setup() {
  pinMode(ledPin, OUTPUT); // Configura o pino do LED como saída
  Serial.begin(9600);
}

void loop() {
  int valorPotencia = analogRead(potenciometroPin); // Lê o valor da Potência
  int luminosidade = map(valorPotencia, 0, 1023, 0, 255);
  analogWrite(ledPin, luminosidade); // Define a luminosidade do LED
  Serial.print("Potência: ");
  Serial.println(valorPotencia); // Imprime o valor do potenciômetro no monitor serial
  delay(10);// Pequeno atraso para estabilidade
}
