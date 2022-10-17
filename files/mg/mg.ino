//===================
//ESP8266 Web Server
//===================
#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
ESP8266WebServer server(80);
#include "functions.h"
//---------------------------------
const char* ssid     = "CitRON_Lab";
const char* password = "c1tr0nR&D";
//==============================================================
void setup()
{
  Serial.begin(115200);
  
  pinMode(D2, INPUT);
  pinMode(D8, INPUT);
  pinMode(D4, INPUT);
  pinMode(D5, INPUT);
  pinMode(D6, INPUT);
  pinMode(D7, INPUT);
  digitalWrite(D2, LOW);
  digitalWrite(D8, LOW);
  digitalWrite(D4, LOW);
  digitalWrite(D5, LOW);
  digitalWrite(D8, LOW);
  digitalWrite(D7, LOW);
  
  WiFi.begin(ssid, password);
  Serial.print("\n\r \n\rWorking to connect");
  while (WiFi.status() != WL_CONNECTED) {delay(500); Serial.print(".");}
  Serial.println("");
  Serial.println("ESP8266 Webpage");
  Serial.println("Connected to WiFi");
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
  
  server.on("/", handleRoot);
  server.on("/stat", stat);

  server.begin();
  Serial.println("HTTP server started");
}
//======================================================================
void loop()
{server.handleClient();

  digitalWrite(D2, LOW);
  digitalWrite(D8, LOW);
  digitalWrite(D4, LOW);
  digitalWrite(D5, LOW);
  digitalWrite(D6, LOW);
  digitalWrite(D7, LOW);}

  
