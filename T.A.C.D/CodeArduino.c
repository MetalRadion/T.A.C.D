#include <Servo.h>              
#include <LiquidCrystal.h>
const int trigPin = 12;          
const int echoPin = 13;           

const int redPin = 8;           
const int greenPin = 10;        
const int bluePin = 11;   
LiquidCrystal lcd(2, 3, 4, 5, 6 ,7);
int sensor = A0;

const int buzzerPin = 1;         

float distance = 0;               

Servo myservo;                   

void setup()
{
  Serial.begin (9600);        

  pinMode(trigPin, OUTPUT);   
  pinMode(echoPin, INPUT); 

  pinMode(redPin, OUTPUT);
  pinMode(greenPin, OUTPUT);
  pinMode(bluePin, OUTPUT);

  pinMode(buzzerPin, OUTPUT); 
  lcd.begin(16,2);
  pinMode(sensor,INPUT);

  myservo.attach(9); 

}

void loop() {
  distance = getDistance();   

  int analogValue = analogRead(sensor);
  float temperatura = ((5/1024.0)*analogValue*100) - 50;
  Serial.println(analogValue);
  Serial.println(temperatura);
  
  lcd.setCursor(0, 0);
  lcd.print("Temperatura: ");
  lcd.setCursor(12, 0);
  lcd.print(temperatura);
  lcd.setCursor(0, 1);
  delay(600);
  lcd.clear();
  Serial.print(distance);     
  Serial.println(" in");
  

  if (distance <= 65) {                       

	analogWrite(redPin, 255);
	analogWrite(greenPin, 0);
	analogWrite(bluePin, 0);

	tone(buzzerPin, 100);    
	myservo.write(90);            
	delay(1);       

 } else {  
   analogWrite(redPin, 0);
   analogWrite(greenPin, 255);
   analogWrite(bluePin, 0);
   
   myservo.write(0);            
   delay(1);
 
 }

  delay(50);     
}



float getDistance()
{
  float echoTime;                 
  float calculatedDistance;       

  
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);

  echoTime = pulseIn(echoPin, HIGH);      
                                          

  calculatedDistance = echoTime / 148.0;  

   return calculatedDistance;
  }