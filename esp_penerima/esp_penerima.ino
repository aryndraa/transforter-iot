  #define TX_PIN 17  // Pin TX (tidak digunakan di penerima)
  #define RX_PIN 16  // Pin RX yang digunakan

  String receivedData = "";

  void setup() {
      Serial.begin(9600);       // Debugging via Serial Monitor
      Serial2.begin(115200, SERIAL_8N1, RX_PIN, TX_PIN); // UART dengan baudrate 9600
  }   

  void loop() {
     receivedData = Serial2.readStringUntil('\n');  // Baca sampai newline

      receivedData.trim();

      Serial.print("Raw Data: ");
      Serial.println(receivedData);

      // Pisahkan data berdasarkan koma
      int commaIndex = receivedData.indexOf(',');
      Serial.println(commaIndex);


      if (commaIndex != -1) {
          String tempString = receivedData.substring(0, commaIndex);
          String humString = receivedData.substring(commaIndex + 1);

          // Konversi ke tipe data numerik
          float temperature = tempString.toFloat();
          int humidity = humString.toInt();

          // Tampilkan hasil di Serial Monitor
          Serial.print("Received Temperature: ");
          Serial.println(temperature);
          Serial.print("Received Humidity: ");
          Serial.println(humidity);
      }

  }
