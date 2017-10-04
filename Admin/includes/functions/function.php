<?php


function getTitle() {
    
        global $pageTitle;
        
    if (isset($pageTitle)) {

        echo $pageTitle;
    } else {

        echo "Branches";
    }
}


function redirectHome($theMsg, $url= null, $seconds = 3) {
    
           if ($url === null) {
    
                  $url  = 'dashboard.php';
                  $link = 'Home Page';
           } else {
    
                  if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== '') {
    
                         $url  = $_SERVER['HTTP_REFERER'];
    
                         $link = 'Previous Page'; 
              } else {
    
                         $url  = 'dashboard.php';
                         $link = 'Home Page';
              }
           }
    
              echo  "<div class='container'>
                        $theMsg <div class='alert alert-warning aler text-center' role='alert'> You Will Be Redirected to $link After $seconds Secondes.</div>
                    </div>";
            
            header("refresh:$seconds;url=$url");
    
            exit();
        }

        function checkItem($select, $from, $value) {
            
                global $contant;
            
                $statement = $contant->prepare("SELECT $select FROM $from WHERE $select = ? ");
            
                $statement->execute(array($value));
                
                $count = $statement->rowCount();
            
                return $count;
            }

            function getLatest($select, $table, $order, $limit = 5) {
                
                    global $contant;
                
                    $getStmt = $contant->prepare("SELECT $select FROM $table ORDER BY $order DESC LIMIT $limit");
                
                    $getStmt->execute();
                    $rows = $getStmt->fetchAll();
                    return $rows;
                }

              
                   // Count Numer Of Items Function v1.0

                    function countItems($item, $table) {
                
                    global $contant;
                
                    $stmt2 = $contant->prepare("SELECT COUNT($item) FROM $table");
                
                    $stmt2->execute();
                
                    return $stmt2->fetchColumn();
                
                } 

                function getWeb($catID) {
                    
                        global $contant;
                        $getWeb = $contant->prepare("SELECT * FROM websites WHERE cat_ID = ? ORDER BY ID ASC");
                        $getWeb->execute(array($catID));
                        $webs = $getWeb->fetchAll();
                    
                        return $webs;
                    }

                    function getAll($tebleName) {
                        
                            global $contant;
                            $getAll = $contant->prepare("SELECT * FROM $tebleName");
                            $getAll->execute();
                            $All = $getAll->fetchAll();
                        
                            return $All;
                        }
                        
            