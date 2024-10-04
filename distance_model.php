<?php 
class Distance_model extends CI_Model {

    public function calculateDistance($lat1, $lon1, $lat2, $lon2) {
        
        $lat1 = deg2rad($lat1);
        $lon1 = deg2rad($lon1);
        $lat2 = deg2rad($lat2);
        $lon2 = deg2rad($lon2);
        
       
        $radius = 6371;
    
      
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;
        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $radius * $c;
    
        return $distance;
    }

    public function get_users($latitude_partner, $longitude_partner, $district){
        
        $sql = "SELECT * FROM streetbox_location WHERE District = ?";
        $query = $this->db->query($sql, array($district));
        $kfon = $query->result(); 
    
       
        $sql1 = "SELECT * FROM partners WHERE Latitude = ? AND Longitude = ?";
        $query1 = $this->db->query($sql1, array($latitude_partner, $longitude_partner));
        $LNP = $query1->result();   
    
        $mindist = PHP_INT_MAX;
        $finalSnum = 0;

        
        foreach($kfon as $row){
            $dist = $this->calculateDistance($latitude_partner, $longitude_partner, $row->Latitude, $row->Longitude);
            if($mindist > $dist){
                $mindist = $dist;
                $finalSnum = $row->Snum;
            }
        }

     
        $sql2 = "SELECT * FROM streetbox_location WHERE Snum = ?";
        $query2 = $this->db->query($sql2, array($finalSnum));
        $result = $query2->result(); 

       
        return $result;
    }
}
?>
