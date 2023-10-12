<?php

// =============================================================================
// FUNCTIONS/GLOBAL/PLUGINS/MODERN-EVENT-CALENDAR.PHP
// -----------------------------------------------------------------------------
// Plugin setup for theme compatibility.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Filter for Removing Support Box
// =============================================================================

// Filter For Removing Support Box
// =============================================================================

add_filter( 'mec_dashboard_box_support', '__return_false' );
add_filter( 'mec_dashboard_box_stats', '__return_false' );