# for_Ozon
Parsing for the Ozon online store


		 Имеем входную строку
		 $str = 'Jun 6 11:31:43 radiusz4s1.noc.o3.ru Jun 6 11:31:43 radiusd[11213]: rlm_perl: [TYPE:AUTHCHECK][STATUS:isSerialRevoked]
		 [MAC:144F8A5DA74B][SERIAL:64000055535621C5423794F258000000005553][SOURCE:Wireless-802.11][NASID:hac1.z4.net.o3.ru][NASIP:10.25.192.252][RET:CONT]';

		 На выходе должен получиться новый массив строковых значений с соответствующим строковым ключом
		 
    DATE => Jun 6 11:31:43
    STATUS => isSerialRevoked
    MAC => 144F8A5DA74B
    SERIAL => 64000055535621C5423794F258000000005553
    SOURCE => Wireless-802.11
    NASID => hac1.z4.net.o3.ru
    NASIP => 10.25.192.252
    RET => CONT
