#include <c:\Users\User\Desktop\»ћвс20-20200312T100222Z-001\»ћвс20\Actor_Pilgrim\Actor Pilgrim Express Simulator (APES-2012)\Project Files\Pilgrim.h>
 
 
forward
{
 int fw;
 
 modbeg("рм3", 108, 10000, (long)1234567890, none, 105, none, none, 2);
 actor("техника",  101, none, erln, 0.9, 4, none, 105);
 network(dummy, standard)
 {
  top(105): 
        queue("очередь", none, 106);
             place;
 
  top(106): 
        serve("ремонт", 3, none, norm, 9.0, 3.0, none, 107);
             place;
 
  top(107): 
        term("техника");
             place;
 
  fault(123);
 }
 modend("pilgrim.rep", 1, 8, page);
 return 0;
}
