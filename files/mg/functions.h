
//-----------------------------------
//functions executing client requests
//-----------------------------------
void handleRoot()
{
  server.send(200, "text/html", "<h1>Monitoring Tizimi: /stat<br></h1>");
}

void stat()
{
  String stat_val1;
  if(digitalRead(D2)==HIGH)
  {
    stat_val1 = String("PIR 1: ") + String("Odam yo`q") + "\n";
  }
  if(digitalRead(D2)==LOW)
  {
    stat_val1 = String("PIR 1: ") + String("Begona odam aniqlandi!") + "\n";
  }

	
//------------------
String stat_val2;
if(digitalRead(D8)==HIGH)
  {
    stat_val2 = String("PIR 2: ") + String("Odam yo`q") + "\n";
  }
  if(digitalRead(D8)==LOW)
  {
    stat_val2 = String("PIR 2: ") + String("Begona odam aniqlandi!") + "\n";
  }


//------------------
  
String stat_val3;
if(digitalRead(D4)==HIGH)
  {
    stat_val3 = String("PIR 3: ") + String("Odam yo`q") + "\n";
  }
  if(digitalRead(D4)==LOW)
  {
    stat_val3 = String("PIR 3: ") + String("Begona odam aniqlandi!") + "\n";
  }


//-------------------

String stat_val4;
if(digitalRead(D5)==HIGH)
  {
    stat_val4 = String("SMK 1: ") + String("Odam yo`q") + "\n";
  }
  if(digitalRead(D5)==LOW)
  {
    stat_val4 = String("SMK 1: ") + String("Begona odam aniqlandi!") + "\n";
  }


//--------------------

String stat_val5;
if(digitalRead(D6)==HIGH)
  {
    stat_val5 = String("SMK 2: ") + String("Odam yo`q") + "\n";
  }
  if(digitalRead(D6)==LOW)
  {
    stat_val5 = String("SMK 2: ") + String("Begona odam aniqlandi!") + "\n";
  }


//----------------------

String stat_val6;
if(digitalRead(D7)==HIGH)
  {
    stat_val6 = String("SMK 3: ") + String("Odam yo`q") + "\n";
  }
  if(digitalRead(D7)==LOW)
  {
    stat_val6 = String("SMK 3: ") + String("Begona odam aniqlandi!") + "\n";
  }



  stat_val1 = "<html><head><meta http-equiv=\"refresh\" content=\"2\"> <body bgcolor=\"#add8e6\">"
                + stat_val1 + "<br>" + stat_val2 + "<br>" + stat_val3 + "<br>" + stat_val4 + "<br>"  
                + stat_val5 + "<br>" + stat_val6  + "<br>" + "</body></html>";

 
  
 server.send(200, "text/html", stat_val1);


}

//------------------------------------------------------------------------
