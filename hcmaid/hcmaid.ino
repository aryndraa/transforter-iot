const int trigPin1 = 16;
const int echoPin1 = 17;
const int trigPin2 = 2;
const int echoPin2 = 15;
const int trigPin3 = 13;
const int echoPin3 = 12;
const int trigPin4 = 14;
const int echoPin4 = 27;
const int trigPin5 = 26;
const int echoPin5 = 25;
const int trigPin6 = 33;
const int echoPin6 = 32;
const int trigPin7 = 22;
const int echoPin7 = 23;
const int trigPin8 = 19;
const int echoPin8 = 18;
const int buzz = 21;

// Define sound speed in cm/uS
#define SOUND_SPEED 0.034

long duration1, duration2, duration3, duration4, duration5, duration6, duration7, duration8;
float distanceCm1, distanceCm2, distanceCm3, distanceCm4, distanceCm5, distanceCm6, distanceCm7, distanceCm8;

void setup() {
  Serial.begin(115200); // Starts the serial communication
  pinMode(trigPin1, OUTPUT);
  pinMode(echoPin1, INPUT);
  pinMode(trigPin2, OUTPUT);
  pinMode(echoPin2, INPUT);
  pinMode(trigPin3, OUTPUT);
  pinMode(echoPin3, INPUT);
  pinMode(trigPin4, OUTPUT);
  pinMode(echoPin4, INPUT);
  pinMode(trigPin5, OUTPUT);
  pinMode(echoPin5, INPUT);
  pinMode(trigPin6, OUTPUT);
  pinMode(echoPin6, INPUT);
  pinMode(trigPin7, OUTPUT);
  pinMode(echoPin7, INPUT);
  pinMode(trigPin8, OUTPUT);
  pinMode(echoPin8, INPUT);
  pinMode(buzz, OUTPUT);
}

void loop() {
  digitalWrite(buzz, LOW);

  // Sensor 1
  digitalWrite(trigPin1, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin1, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin1, LOW);
  duration1 = pulseIn(echoPin1, HIGH);
  distanceCm1 = duration1 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 1 (cm): ");
  Serial.println(distanceCm1);
  if (distanceCm1 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 1)");
    digitalWrite(buzz, HIGH);
  }

  // Sensor 2
  digitalWrite(trigPin2, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin2, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin2, LOW);
  duration2 = pulseIn(echoPin2, HIGH);
  distanceCm2 = duration2 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 2 (cm): ");
  Serial.println(distanceCm2);
  if (distanceCm2 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 2)");
    digitalWrite(buzz, HIGH);

  }

  // Sensor 3
  digitalWrite(trigPin3, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin3, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin3, LOW);
  duration3 = pulseIn(echoPin3, HIGH);
  distanceCm3 = duration3 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 3 (cm): ");
  Serial.println(distanceCm3);
  if (distanceCm3 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 3)");
    digitalWrite(buzz, HIGH);

  }

    // Sensor 4
  digitalWrite(trigPin4, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin4, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin4, LOW);
  duration4 = pulseIn(echoPin4, HIGH);
  distanceCm4 = duration4 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 4 (cm): ");
  Serial.println(distanceCm4);
  if (distanceCm4 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 4)");
    digitalWrite(buzz, HIGH);

  }

    // Sensor 5
  digitalWrite(trigPin5, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin5, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin5, LOW);
  duration5 = pulseIn(echoPin5, HIGH);
  distanceCm5 = duration5 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 5 (cm): ");
  Serial.println(distanceCm5);
  if (distanceCm5 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 5)");
    digitalWrite(buzz, HIGH);

  }

    // Sensor 6
  digitalWrite(trigPin6, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin6, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin6, LOW);
  duration6 = pulseIn(echoPin6, HIGH);
  distanceCm6 = duration6 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 6 (cm): ");
  Serial.println(distanceCm6);
  if (distanceCm6 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 6)");
    digitalWrite(buzz, HIGH);

  }

    // Sensor 7
  digitalWrite(trigPin7, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin7, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin7, LOW);
  duration7 = pulseIn(echoPin7, HIGH);
  distanceCm7 = duration7 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 7 (cm): ");
  Serial.println(distanceCm7);
  if (distanceCm7 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 7)");
    digitalWrite(buzz, HIGH);

  }


    // Sensor 8
  digitalWrite(trigPin8, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin8, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin8, LOW);
  duration8 = pulseIn(echoPin8, HIGH);
  distanceCm8 = duration8 * SOUND_SPEED / 2;

  Serial.print("Jarak Sensor 8 (cm): ");
  Serial.println(distanceCm8);
  if (distanceCm8 <= 20) {
    Serial.println("Jarak terlalu dekat! (Sensor 8)");
    digitalWrite(buzz, HIGH);

  }

  delay(1000);
}

