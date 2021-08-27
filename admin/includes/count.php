<?php

       

            function countAffiliate(){

                global $conn;
                $affiliate_number = '';
                $sql= (" SELECT COUNT(id) AS noaffiliate FROM affiliate;");
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $affiliate_number = $row['noaffiliate'];
                                echo $affiliate_number; 
                                return $affiliate_number;    
                        }
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    }
            
                }
            
            function countSignals(){

                global $conn;
        
                $signal_number = '';
                $sql= (" SELECT COUNT(id) AS nosignal FROM signals;");
                if($result = mysqli_query($conn,$sql)){ 
                        if (mysqli_num_rows($result)>0){
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                $signal_number = $row['nosignal'];
                                echo $signal_number;
                                return $signal_number;     
                        }
                    }else { 
                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                    }
            
                }



                function countNews(){

                    global $conn;
            
                    $news_number = '';
                    $sql= (" SELECT COUNT(id) AS nonews FROM newsletter;");
                    if($result = mysqli_query($conn,$sql)){ 
                            if (mysqli_num_rows($result)>0){
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    $news_number = $row['nonews'];
                                    echo $news_number;
                                    return $news_number;     
                            }
                        }else { 
                            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                        }
                
                    }
                    function countPack(){

                        global $conn;
                
                        $pack_number = '';
                        $sql= (" SELECT COUNT(package_id) AS nopack FROM package;");
                        if($result = mysqli_query($conn,$sql)){ 
                                if (mysqli_num_rows($result)>0){
                                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                        $npack_number = $row['nopack'];
                                        echo $pack_number;
                                        return $pack_number;     
                                }
                            }else { 
                                echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                            }
                    
                        }
    

                function countUsers(){
                    global $conn;
            
                    $user_number = '';
                    $sql= (" SELECT COUNT(user_id) AS nousers FROM users;");
                    if($result = mysqli_query($conn,$sql)){ 
                            if (mysqli_num_rows($result)>0){
                                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                    $user_number = $row['nousers'];
                                    echo $user_number; 
                                    return $user_number;    
                            }
                        }else { 
                            echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                        }
                
                    }
                
                    function countInv(){
                        global $conn;
                
                        $inv_number = '';
                        $sql= (" SELECT COUNT(id) AS noinv FROM investments;");
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

                        function sumInv(){
                            global $conn;
                            $inv_total = '';
                            $sql= (" SELECT SUM(amount) AS totalinv FROM investments;");
                            if($result = mysqli_query($conn,$sql)){ 
                                    if (mysqli_num_rows($result)>0){
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            $inv_total = $row['totalinv'];
                                            echo $inv_total; 
                                            return $inv_total;    
                                    }
                                }else { 
                                    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                }
                        
                            }
                    


                        function sumDepo(){
                            global $conn;
                            $depo_total = '';
                            $sql= (" SELECT SUM(amount) AS totaldepo FROM transaction WHERE type = 'deposit';");
                            if($result = mysqli_query($conn,$sql)){ 
                                    if (mysqli_num_rows($result)>0){
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                            $depo_total = $row['totaldepo'];
                                            echo $depo_total; 
                                            return $depo_total;    
                                    }
                                }else { 
                                    echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                }
                        
                            }

                            function countDepo(){
                                global $conn;
                                $depo_total = '';
                                $sql= (" SELECT count(id) AS totaldepo FROM transaction WHERE type = 'deposit';");
                                if($result = mysqli_query($conn,$sql)){ 
                                        if (mysqli_num_rows($result)>0){
                                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                                                $depo_total = $row['totaldepo'];
                                                echo $depo_total; 
                                                return $depo_total;    
                                        }
                                    }else { 
                                        echo "ERROR: Could not able to execute $sql. ".mysqli_error($conn); 
                                    }
                            
                                }
                    

                        function sumWith(){
                            global $conn;
                            $depo_total = '';
                            $sql= (" SELECT SUM(amount) AS totalwith FROM transaction WHERE type = 'withdraw';");
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
                            


                            function countWith(){
                                global $conn;
                                $depo_total = '';
                                $sql= (" SELECT count(id) AS totalwith FROM transaction WHERE type = 'withdraw';");
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
                        