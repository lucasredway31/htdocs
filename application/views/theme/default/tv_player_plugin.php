<?php 
	$player_watermark           =   $this->db->get_where('config' , array('title'=>'player_watermark'))->row()->value;   
    $player_watermark_logo      =   $this->db->get_where('config' , array('title'=>'player_watermark_logo'))->row()->value;   
    $player_watermark_url       =   $this->db->get_where('config' , array('title'=>'player_watermark_url'))->row()->value;   
    $player_share               =   $this->db->get_where('config' , array('title'=>'player_share'))->row()->value;   
    $player_share_fb_id         =   $this->db->get_where('config' , array('title'=>'player_share_fb_id'))->row()->value;   
    $player_seek_button         =   $this->db->get_where('config' , array('title'=>'player_seek_button'))->row()->value;   
    $player_seek_forward        =   $this->db->get_where('config' , array('title'=>'player_seek_forward'))->row()->value;   
    $player_seek_back           =   $this->db->get_where('config' , array('title'=>'player_seek_back'))->row()->value;   
    $player_volume_remember     =   $this->db->get_where('config' , array('title'=>'player_volume_remember'))->row()->value;
 ?>

 <?php if($player_watermark =='1' ): ?>
    <!-- Logo/watermark -->
    <script src="<?php echo base_url(); ?>assets/player/plugins/watermark/videojs-logo.min.js"></script>
    <script>
      ovoo_player.videoLogo({
        watermark: ' ',
        logo: '<?php echo base_url().$player_watermark_logo; ?>', // default 'logo.png'
        homepage: '<?php echo $player_watermark_url; ?>',
      });
    </script>
    <!-- End Logo/watermark -->
<?php endif; if($player_share =='1' ): ?>
    <!-- Social Share -->
    <script src="<?php echo base_url(); ?>assets/player/plugins/videojs-share/videojs-share.js"></script>
    <script>
        ovoo_player.share({
            appId: 11231434324
        });
    </script>
    <!-- End Social Share -->
<?php endif;?>
    <!-- hotkeys -->
    <script src="<?php echo base_url(); ?>assets/player/plugins/hotkeys/videojs.hotkeys.min.js"></script>
    <script>    
      ovoo_player.ready(function() {
        this.hotkeys({
          seekStep: 5
        });
      });
    </script>
    <!-- End hotkeys -->
    <?php if($player_volume_remember =='1' ): ?>
    <!-- persistvolume -->
    <script src="<?php echo base_url(); ?>assets/player/plugins/videojs.persistvolume/videojs.persistvolume.js"></script>
    <script>    
      ovoo_player.ready(function() {
        this.persistvolume({
          namespace: "ovoo_player-previus-volume"
        });
      });
    </script>
    <!-- End persistvolume -->
<?php endif; ?>