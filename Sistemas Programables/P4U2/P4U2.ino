
int pinSensor = A0, pinLed = 2, valorSensor = 0, tiempo = 100, pinAct = 3;
int Valorled=0, ValorAct=0, barra;

void setup() {
  pinMode(pinLed, OUTPUT);
  pinMode(pinSensor, INPUT);
  pinMode(pinAct, OUTPUT);
  for (barra=4;barra<=13;barra++){
    pinMode(barra, OUTPUT);
    digitalWrite(barra, HIGH);
    delay(tiempo);
    digitalWrite(barra, LOW);
    
    
  }
  Serial.begin(9600);
}

void loop() {
  
  valorSensor = analogRead(pinSensor);
  Serial.println(valorSensor);
  Serial.println("    ");
  Valorled = map(valorSensor, 0, 1023, 0, 10);
  Serial.print(Valorled);

  Serial.print("    ");
  ValorAct = map(valorSensor, 0, 1023, 0, 255);
  Serial.println(ValorAct);

  analogWrite(pinAct,ValorAct); 

  for(barra=4; barra<= Valorled+3;barra++){
    digitalWrite(barra, HIGH);
  }
  
  for(barra=Valorled+3; barra<= 14;barra++){
    digitalWrite(barra, LOW);
  }
  if (Valorled < 5) {
    digitalWrite(pinLed, HIGH);
    //digitalWrite(pinAct, HIGH);
    delay(tiempo);
  }
  else{
    digitalWrite(pinLed, LOW);
    //digitalWrite(pinAct, LOW);
    delay(tiempo);
  }
}
