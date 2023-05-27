<?php
        function manualSort($array) {
            $length = count($array);
            
            for ($i = 0; $i < $length; $i++) {
                for ($j = $i + 1; $j < $length; $j++) {
                    if ($array[$i] > $array[$j]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
            
            return $array;
        }
        
        // Contoh penggunaan
        $array = [4, 6, 1, 5, 9, 2, 8, 1, 0, 2, 3, 1, 7];
        $sortedArray = manualSort($array);
        
        echo "Array setelah diurutkan: " . implode(", ", $sortedArray);
        
?>
