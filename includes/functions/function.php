<?php


// redirect page
function redirectHome($theMsg, $url= null, $seconds = 3) {
    
           if ($url === null) {
    
                  $url  = 'index.php';
                  $link = 'Home Page';
           } else {
    
                  if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {
    
                         $url  = $_SERVER['HTTP_REFERER'];
    
                         $link = 'Previous Page'; 
              } else {
    
                         $url  = 'index.php';
                         $link = 'Home Page';
              }
           }
    
              echo  $theMsg ; 
                    
            
            header("refresh:$seconds;url=$url");
    
            exit();
        }

        // checkt for item is have or not
        function checkItem($select, $from, $value) {
            
                global $contant;
            
                $statement = $contant->prepare("SELECT $select FROM $from WHERE $select = ? ");
            
                $statement->execute(array($value));
                
                $count = $statement->rowCount();
            
                return $count;
            }

        /* Get Category */
        function webCat($numbrCat) {
                        
            global $contant;
                        
            $getCat = $contant->prepare("SELECT * FROM websites WHERE cat_ID = $numbrCat");
                        
            $getCat->execute();
            $catz = $getCat->fetchAll();
            return $catz;

        }

        function getLatest($select, $table, $order, $limit = 4) {
                
           global $contant;
                
           $getStmt = $contant->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");
                
            $getStmt->execute();
            $rows = $getStmt->fetchAll();
            return $rows;
        }

         // Count Numer Of Items Function v2.0

                    function countItems($limitCatID) {
                
                    global $contant;
        
                    $stmt2 = $contant->prepare("SELECT COUNT(*) FROM websites WHERE cat_ID=$limitCatID");
                
                    $stmt2->execute();
                
                    return $stmt2->fetchColumn();
                
                } 