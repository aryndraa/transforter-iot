void setup() {
    Serial.begin(115200);  
}

void loop() {
    int temperature = 25;  // Contoh variabel suhu
    int humidity = 65;

    // Format: "temperature,humidity\n"
    Serial.print(temperature);
    Serial.print(",");
    Serial.println(humidity);

    delay(1000);
}
