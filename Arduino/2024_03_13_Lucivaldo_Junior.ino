/*
 
Lucivaldo dos Santos Mielo Junior RA:220020411

*/

const int sensorPin = A0;

void setup() {
  // Inicializa a comunicação serial para depuração
  Serial.begin(9600);
}

void loop() {
  // Lê a voltagem no pino analógico
  int sensorValue = analogRead(sensorPin);
  
  // Converte o valor lido em voltagem
  float voltage = sensorValue * (5.0 / 1023.0);
  
  // Exibe a voltagem no console serial
  Serial.print("Voltagem: ");
  Serial.print(voltage);
  Serial.println("V");

  // Aguarda um curto período antes da próxima leitura
  delay(1000);
}
