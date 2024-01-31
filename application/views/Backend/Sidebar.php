<style type="text/css">
  .nav-item .nav-link{
    background-color: transparent;
  }
 .active .nav-link{
    background-color: #f6f9ff;
  }
</style>
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
     <a href="#" class="logo d-flex align-items-center d-block d-lg-none">
        <!-- <img src="<?php echo base_url(); ?>assets/img/logo.png" alt=""> -->
    <!-- <span class="" style="font-size: 18px; margin-bottom: 10px;">Recipe Management System</span> -->
      </a>
  <li class="nav-item <?= $this->uri->segment(2) === 'dashboard' || !$this->uri->segment(2) ? 'active' : '' ?>">
      <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-item   <?= $this->uri->segment(2) === 'Settings' ? 'active' : '' ?>">
      <a class="nav-link "  href="<?php echo base_url(); ?>dashboard/Settings">
        <i class="ri-settings-5-line"></i><span>Settings</span>
      </a>

    </li> 

    <li class="nav-item   <?= $this->uri->segment(2) === 'Testimonials' || $this->uri->segment(2) === 'BrandLogos' ? 'active' : '' ?>">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Home Page</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse <?= $this->uri->segment(2) === 'Testimonials' || $this->uri->segment(2) === 'BrandLogos' ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
        <li class="nav-item   <?= $this->uri->segment(2) === 'Testimonials' ? 'active' : '' ?>">
          <a href="<?php echo base_url(); ?>dashboard/Testimonials">
            <!-- Testimonials -->
            <i class="bi bi-circle"></i><span>Testimonial</span>
          </a>
        </li>
        <li class="nav-item   <?= $this->uri->segment(2) === 'BrandLogos' ? 'active' : '' ?>">
          <a href="<?php echo base_url(); ?>dashboard/BrandLogos">
            <i class="bi bi-circle"></i><span>Brand Logos</span>
          </a>
        </li>
      </ul>
    </li>   
   <!-- Properties -->
     <li class="nav-item   <?= $this->uri->segment(2) === 'AddProperties' || $this->uri->segment(2) === 'ViewProperties' ? 'active' : '' ?>">
      <a class="nav-link collapsed" data-bs-target="#tables-nav1" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Properties</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav1" class="nav-content collapse <?= $this->uri->segment(2) === 'AddProperties' || $this->uri->segment(2) === 'ViewProperties' || $this->uri->segment(2) === 'City' || $this->uri->segment(2) === 'Property_type' ? 'show' : ''  ?> " data-bs-parent="#sidebar-nav">
        <li class="nav-item   <?= $this->uri->segment(2) === 'AddProperties' ? 'active' : '' ?>">
          <a href="<?php echo base_url(); ?>dashboard/AddProperties">
            <!-- AddProperties -->
            <i class="bi bi-circle"></i><span>Add Properties</span>
          </a>
        </li>
        <li class="nav-item   <?= $this->uri->segment(2) === 'ViewProperties' ? 'active' : '' ?>">
          <a href="<?php echo base_url(); ?>dashboard/ViewProperties">
            <i class="bi bi-circle"></i><span>View Properties</span>
          </a>
        </li> 
        <li class="nav-item   <?= $this->uri->segment(2) === 'City' ? 'active' : '' ?>">
          <a href="<?php echo base_url(); ?>dashboard/City">
            <i class="bi bi-circle"></i><span>Add City</span>
          </a>
        </li> 
        <li class="nav-item   <?= $this->uri->segment(2) === 'City' ? 'active' : '' ?>">
          <a href="<?php echo base_url(); ?>dashboard/Property_type">
            <i class="bi bi-circle"></i><span>Add Property Type</span>
          </a>
        </li> 
      </ul>
    </li>


 

</aside>
