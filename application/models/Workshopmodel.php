<?php 

class Workshopmodel extends CI_Model{
  
        public function no_of_workshop(){

            $query=$this->db
                        ->select('workshop_id')
                        ->get('workshop');

            return $query->num_rows();             

        }

        public function workshop($limit,$offset)
        {
            $query=$this->db
                        ->limit($limit,$offset)
                        ->order_by('workshop_date','DESC')
                        ->get('workshop');

            return $query->result();          
        }

        public function find_workshop($workshop_id)
        {
            $query=$this->db
                        ->where('workshop_id',$workshop_id)
                        ->get('workshop');
            return $query->row();            
        }
        public function add_workshop($array)
        {   
            $workshop_name=$array['name'];
            $workshop_desc=$array['desc'];
            $workshop_date=$array['workshop_date'];
            $workshop_time=$array['workshop_time'];
            $workshop_venue=$array['venue'];
            $workshop_status=$array['status'];
            $price=$array['price'];
            $image_path=$array['image_path'];
            $slug=$array['slug'];
            return $this->db
                        ->insert('workshop',['workshop_name'=>$workshop_name,'workshop_date'=>$workshop_date,'workshop_time'=>$workshop_time,'workshop_venue'=>$workshop_venue,'status'=>$workshop_status,'price'=>$price,'workshop_slug'=>$slug,'image_path'=>$image_path,'workshop_description'=>$workshop_desc]);
        }

        public function update_workshop($array)
        {          
            $workshop_name=$array['name'];
            $workshop_desc=$array['desc'];
            $workshop_date=$array['workshop_date'];
            $workshop_time=$array['workshop_time'];
            $workshop_venue=$array['venue'];
            $workshop_status=$array['status'];
            $price=$array['price'];
            $image_path=$array['image_path'];
            $workshop_id=$array['workshop_id'];
            return $this->db
                        ->where('workshop_id',$workshop_id)
                        ->update('workshop',['workshop_name'=>$workshop_name,'workshop_date'=>$workshop_date,'workshop_time'=>$workshop_time,'workshop_venue'=>$workshop_venue,'status'=>$workshop_status,'price'=>$price,'image_path'=>$image_path,'workshop_description'=>$workshop_desc]);
                      
        }
        
        public function delete_workshop($workshop_id)
        {
            return $this->db
                        ->where('workshop_id',$workshop_id)
                        ->delete('workshop');
        }


        public function workshop_bystatus($status)
        {
            $query=$this->db
                        ->where('status',$status)
                        ->get('workshop');
            return $query->result();            
        }

        public function workshop_byslug($slug)
        {
            $query=$this->db
                        ->where('workshop_slug',$slug)
                        ->get('workshop');
            return $query->row();            
        }

        public function find_price($workshop_id)
        {
            $query=$this->db
                        ->select('price')
                        ->where('workshop_id',$workshop_id)
                        ->get('workshop');
             return $query->row();             
        }    

        public function payment($array)
        {   
            $name=$array['name'];
            $email=$array['email'];

            $payment_id=$array['order_id'];
            $amount=$array['amount'];
            $workshop=$array['workshop_name'];
            $payment_status="completed";
            $date=date("Y-m-d h:i:sa");

            return $this->db                        
                        ->insert('payment',['name'=>$name,'email'=>$email,'amount'=>$amount,'payment_status'=>$payment_status,'payment_id'=>$payment_id,'time'=>$date,'workshop'=>$workshop]);
        }   

        public function freeregister($array)
        {   
            $name=$array['name'];
            $email=$array['email'];

            $workshop=$array['workshop_name'];
            $payment_status="free";
            $date=date("Y-m-d h:i:sa");

            return $this->db                        
                        ->insert('payment',['name'=>$name,'email'=>$email,'payment_status'=>$payment_status,'time'=>$date,'workshop'=>$workshop]);
        }   

        public function upcoming_workshop($limit,$offset)
        {   
            $status='upcoming';
            $query=$this->db
                        ->limit($limit,$offset)
                        ->order_by('workshop_date','DESC')
                        ->where('status',$status)
                        ->get('workshop');

            return $query->result();            
        }

        public function no_of_upcomingworkshop(){
            
            $status='upcoming';
            $query=$this->db
                        ->where('status',$status)
                        ->get('workshop');

            return $query->num_rows();             

        }

        public function no_(){
            
            $status='upcoming';
            $query=$this->db
                        ->where('status',$status)
                        ->get('workshop');

            return $query->num_rows();             

        }
        public function registered_candidate($workshop_id){
            $q=$this->db
                    ->select('workshop_name')
                    ->where('workshop_id',$workshop_id)
                    ->get('workshop');
            $name=$q->row();
            $workshop_name=$name->workshop_name;       
            $query=$this->db
                        ->select('email')
                        ->where('workshop',$workshop_name)
                        ->get('payment');
            return $query->result();            
        }

        public function user_receipt($orderId)
        {
            $query=$this->db
                        ->where('payment_id',$orderId)
                        ->get('payment');
            return $query->row();            
        }

}


 ?>
