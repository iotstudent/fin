<?php



function countRef(){
    global $conn;
    global $code;
    $sql= (" SELECT count(user_id) AS noref FROM users  WHERE referee_code ='$code';");
    if($result = mysqli_query($conn,$sql)){ 
            if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $noref = $row['noref'];
                    echo $noref; 
                    return $noref;    
            }
        }else { 
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
        }

    }


       
function showCode(){
    global $conn;
    global $code;
    $sql= (" SELECT referal_code FROM users  WHERE referal_code='$code';");
    if($result = mysqli_query($conn,$sql)){ 
            if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $code = $row['referal_code'];
                    echo $code; 
                    return $code;    
            }
        }else { 
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
        }

    }
       
function sumWallet(){
    global $conn;
    global $id;
    $sql= (" SELECT wallet FROM users  WHERE user_id='$id';");
    if($result = mysqli_query($conn,$sql)){ 
            if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $wallet = $row['wallet'];
                    echo $wallet; 
                    return $wallet;    
            }
        }else { 
            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
        }

    }

    function sumRef(){
        global $conn;
        global $id;
        $sql= (" SELECT referal_earning FROM users  WHERE user_id='$id';");
        if($result = mysqli_query($conn,$sql)){ 
                if (mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        $ref_earn = $row['referal_earning'];
                        echo $ref_earn; 
                        return $ref_earn;    
                }
            }else { 
                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
            }
    
        }

                
                    function countInv(){
                        global $conn;
                        global $id;
                
                        $inv_number = '';
                        $sql= (" SELECT COUNT(id) AS noinv FROM investments WHERE user_id='$id';");
                        if($result = mysqli_query($conn,$sql)){ 
                                if (mysqli_num_rows($result)>0){
                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                        $inv_number = $row['noinv'];
                                        echo $inv_number; 
                                        return $inv_number;    
                                }
                            }else { 
                                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                            }
                    
                        }


                        function countOnInv(){
                            date_default_timezone_set('Africa/Lagos');
                            $date = date('Y/m/d');
                            
                            global $conn;
                            global $id;
                    
                            $inv_number = '';
                            $sql= (" SELECT COUNT(id) AS noinv FROM investments WHERE user_id='$id' AND DATEDIFF(exp_date,'$date')<=2;");
                            if($result = mysqli_query($conn,$sql)){ 
                                    if (mysqli_num_rows($result)>0){
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            $inv_number = $row['noinv'];
                                            // echo $inv_number; 
                                            return $inv_number;    
                                    }
                                }else { 
                                    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                }
                        
                            }

                        function countWith(){
                            global $conn;
                            global $id;
                            $sql= (" SELECT count(id) AS totalwith FROM transaction WHERE type = 'withdraw' AND user_id='$id';");
                            if($result = mysqli_query($conn,$sql)){ 
                                    if (mysqli_num_rows($result)>0){
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            $with_total = $row['totalwith'];
                                            echo $with_total; 
                                            return $with_total;    
                                    }
                                }else { 
                                    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                }
                        
                            }
                    

                        // function sumInv(){
                        //     global $conn;
                        //     $inv_total = '';
                        //     $sql= (" SELECT SUM(amount) AS totalinv FROM investments;");
                        //     if($result = mysqli_query($conn,$sql)){ 
                        //             if (mysqli_num_rows($result)>0){
                        //                 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        //                     $inv_total = $row['totalinv'];
                        //                     echo $inv_total; 
                        //                     return $inv_total;    
                        //             }
                        //         }else { 
                        //             echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                        //         }
                        
                        //     }
                    


                        // function sumDepo(){
                        //     global $conn;
                        //     $depo_total = '';
                        //     $sql= (" SELECT SUM(amount) AS totaldepo FROM transaction WHERE type = 'deposit';");
                        //     if($result = mysqli_query($conn,$sql)){ 
                        //             if (mysqli_num_rows($result)>0){
                        //                 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        //                     $depo_total = $row['totaldepo'];
                        //                     echo $depo_total; 
                        //                     return $depo_total;    
                        //             }
                        //         }else { 
                        //             echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                        //         }
                        
                        //     }

                        //     function countDepo(){
                        //         global $conn;
                        //         $depo_total = '';
                        //         $sql= (" SELECT count(id) AS totaldepo FROM transaction WHERE type = 'deposit';");
                        //         if($result = mysqli_query($conn,$sql)){ 
                        //                 if (mysqli_num_rows($result)>0){
                        //                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        //                         $depo_total = $row['totaldepo'];
                        //                         echo $depo_total; 
                        //                         return $depo_total;    
                        //                 }
                        //             }else { 
                        //                 echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                        //             }
                            
                        //         }
                    

                        // function sumWith(){
                        //     global $conn;
                        //     $depo_total = '';
                        //     $sql= (" SELECT SUM(amount) AS totalwith FROM transaction WHERE type = 'withdraw';");
                        //     if($result = mysqli_query($conn,$sql)){ 
                        //             if (mysqli_num_rows($result)>0){
                        //                 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        //                     $with_total = $row['totalwith'];
                        //                     echo $with_total; 
                        //                     return $with_total;    
                        //             }
                        //         }else { 
                        //             echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                        //         }
                        
                        //     }
                            

