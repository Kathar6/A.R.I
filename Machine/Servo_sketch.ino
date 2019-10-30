#include <Servo.h>

Servo servo1;
Servo servo2;
Servo servo3;

void setup() {
  // put your setup code here, to run once:
  servo1.attach(3);
  servo2.attach(5);
  servo3.attach(10);
  
  servo1.write(50);
  //servo2.write(70);
  //servo3.write(70);
  Serial.begin(9600);
  
}

void loop() {
  
  // put your main code here, to run repeatedly:
     
  if(Serial.available()){
    
  switch (Serial.read()){
    case '1': //Orgánico
             servo2.write(130);
             servo3.write(130);
            delay(1500);
           servo1.write(0);
            delay(1500);
            servo1.write(50);
          break;
    case '2': //Papel y cartón
              servo2.write(70);
             servo3.write(70);
            delay(1500);
           servo1.write(0);
            delay(1500);
            servo1.write(50);
          break;
    case '3': //Plástico
             servo2.write(20);
             servo3.write(20);
            delay(1500);
           servo1.write(0);
            delay(1500);
            servo1.write(50);
            
          break;
 
  }
}

  

  
}


