
int pinSensor = A0, pinLed = 4, valorSensor = 0, tiempo = 500, pinAct = 5;

void setup() {
  pinMode(pinLed, OUTPUT);
  pinMode(pinSensor, INPUT);
  pinMode(pinAct, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  
  valorSensor = analogRead(pinSensor);
  Serial.println(valorSensor);
  Serial.println("    ");
  valorSensor = map(valorSensor, 0, 1023, 0, 100);
  Serial.println(valorSensor);
  
  if (valorSensor < 50) {
    digitalWrite(pinLed, HIGH);
    digitalWrite(pinAct, HIGH);
    delay(tiempo);
  }
  else{
    digitalWrite(pinLed, LOW);
    digitalWrite(pinAct, LOW);
    delay(tiempo);
  }
}
