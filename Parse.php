<?php
class Regex{	

  //принимает строку, формирует массив отфильтрованных данных, возвращает его.  В случае ошибки возвращает FALSE
    public function Parse($str){
      $new_str = preg_replace('~\n~', '', $str);
      
      $pattern =  '~'
                . '(?<DATE>.+?\s\d+?\:\d+?\:\d+?)\s'
                . '.*?STATUS\:(?<STATUS>.+?)\]'
                . '.*?MAC\:(?<MAC>.+?)\]'
                . '.*?SERIAL\:(?<SERIAL>.+?)\]'
                . '.*?SOURCE\:(?<SOURCE>.+?)\]'
                . '.*?NASID\:(?<NASID>.+?)\]'
                . '.*?NASIP\:(?<NASIP>.+?)\]'
                . '.*?RET\:(?<RET>.+?)\]'
                . '~';
      
      if(preg_match_all($pattern, $new_str, $matches, PREG_SET_ORDER) AND count($matches)!= NULL)
      {
        return $this->Clear($matches);
      }
      else return FALSE;
    }
   
   
  //проверка массива (вывод ключ => значение)
  public function Check($arr = array()){
    foreach ($arr as $key => $value)
    {
      echo $key .' => '. $value .'</br>';
    }
  }
	
  //формирование нового - очищенного массива
  private function Clear($matches = array(), $r = array()){
    foreach ($matches as $i)
    {
      $r['DATE'] = $i['DATE'];
      $r['STATUS'] = $i['STATUS'];
      $r['MAC'] = $i['MAC'];
      $r['SERIAL'] = $i['SERIAL'];
      $r['SOURCE'] = $i['SOURCE'];
      $r['NASID'] = $i['NASID'];
      $r['NASIP'] = $i['NASIP'];
      $r['RET'] = $i['RET'];
    }

    return $r;
  }
}
      
    
