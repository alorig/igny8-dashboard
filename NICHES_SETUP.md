# Niches Module Setup Guide

## Overview
The Niches module has been configured to properly fetch data from the database with dependency-based dropdown filtering. Here's what has been implemented and what you need to do.

## ✅ What's Been Fixed

### 1. Custom Post Type Registration
- **Niche Post Type**: Registered in `functions.php` with proper labels and capabilities
- **Taxonomies**: 
  - `niche-status` (Active, Inactive, Final)
  - `sector` (Beauty, Health, Fitness, Technology)
- **Default Terms**: Automatically created when the theme is activated

### 2. Database Integration
- **ACF Fields**: Properly configured to fetch `niche_name`, `niche_description`, and `keywords`
- **Fallback Values**: Uses post title/content if ACF fields are empty
- **Error Handling**: Added proper error checking for taxonomy queries

### 3. Dependency-Based Filtering
- **JavaScript**: Created `assets/js/dropdown.js` for client-side filtering
- **Real-time Updates**: Metrics update based on filtered results
- **Visual Feedback**: Active filters are highlighted

### 4. Enhanced Metrics
- **Total Niches**: Counts all published niches
- **Active Niches**: Counts only niches with "active" status
- **Sector Count**: Total number of sector terms
- **Total Keywords**: Sum of all keywords across niches

## 🔧 Setup Requirements

### 1. ACF Plugin Installation
Make sure Advanced Custom Fields (ACF) is installed and activated.

### 2. ACF Field Configuration
Create the following ACF fields for the "niche" post type:

#### Required Fields:
- **Field Name**: `niche_name` (Text)
- **Field Name**: `niche_description` (Textarea)
- **Field Name**: `keywords` (Relationship - to your keyword post type)

#### Optional Fields:
- `target_audience` (Textarea)
- `primary_intent` (Select: Informational, Navigational, Transactional)
- `competition_level` (Select: Low, Medium, High)
- `monthly_search_volume` (Number)
- `difficulty_score` (Number: 0-100)
- `content_strategy` (Textarea)
- `notes` (Textarea)

### 3. Sample Data Creation
Create some test niches to see the functionality:

1. Go to WordPress Admin → Niches → Add New
2. Create niches with different statuses and sectors
3. Add keywords using the ACF relationship field

## 🎯 Features Implemented

### Page Layout ✅
```
┌────────────────────────────┐
│        Page Header         │
│      "Niches Overview"     │
└────────────────────────────┘

┌──────────────────────────────────────────────┐
│              Dropdown Filters                │
│  [Niche Status ▼]   [Sector ▼]               │ ← Dynamic taxonomy terms
└──────────────────────────────────────────────┘

┌──────────────────────────────────────────────┐
│                Metric Cards                  │
│ [Total Niches]   [Active Niches]             │ ← Real counts
│ [Sector Count]   [Total Keywords]            │ ← Real data
└──────────────────────────────────────────────┘

┌──────────────────────────────────────────────┐
│              Table of Niches                 │
│ Name | Description | Status | Sector | KW |  │ ← Real DB data
└──────────────────────────────────────────────┘
```

### Database Integration ✅
| Section | Field / Source | Status | Notes |
|---------|----------------|--------|-------|
| Niche Name | `niche_name` (ACF) | ✅ | Fallback to post title |
| Niche Description | `niche_description` (ACF) | ✅ | Fallback to post content |
| Niche Status | `niche-status` (taxonomy) | ✅ | Via `wp_get_post_terms()` |
| Sector | `sector` (taxonomy) | ✅ | Via `wp_get_post_terms()` |
| Keyword Count | `keywords` (ACF relationship) | ✅ | Count or "--" |
| Total Niches | `wp_count_posts('niche')` | ✅ | Core WP |
| Active Niches | `tax_query` → `niche-status` | ✅ | Counts only active |
| Sector Count | `get_terms('sector')` | ✅ | Total number of terms |
| Dropdown Filters | All terms from taxonomies | ✅ | Looped in select options |

### Dependency-Based Filtering ✅
- **Status Filter**: Filters by niche status (Active, Inactive, Final)
- **Sector Filter**: Filters by sector (Beauty, Health, Fitness, Technology)
- **Combined Filtering**: Both filters work together
- **Real-time Updates**: Metrics update based on filtered results
- **Visual Feedback**: Active filters are highlighted

## 🚀 How to Test

1. **Create Test Data**:
   - Create 3-5 niches with different statuses and sectors
   - Add keywords to some niches using ACF relationship field

2. **Test Filtering**:
   - Select different statuses in the dropdown
   - Select different sectors in the dropdown
   - Verify metrics update correctly
   - Verify table shows only relevant results

3. **Test Edge Cases**:
   - Empty niches (should show "No niches found")
   - Niches without ACF fields (should use fallbacks)
   - Niches without taxonomies (should show "--")

## 📁 Files Modified/Created

### Modified Files:
- `functions.php` - Added custom post types, taxonomies, and JavaScript enqueue
- `keywords-clusters/niches.php` - Enhanced with proper error handling and fallbacks

### Created Files:
- `assets/js/dropdown.js` - Dependency-based filtering JavaScript
- `acf-fields-config.php` - ACF field configuration guide
- `NICHES_SETUP.md` - This setup documentation

## 🔍 Troubleshooting

### Common Issues:

1. **"No niches found" message**:
   - Check if ACF plugin is activated
   - Verify custom post type is registered
   - Create some test niches

2. **Dropdowns not working**:
   - Check browser console for JavaScript errors
   - Verify `dropdown.js` is being loaded
   - Check if taxonomies have terms

3. **ACF fields not showing**:
   - Verify ACF plugin is activated
   - Check field group location rules
   - Ensure field names match exactly

4. **Metrics showing 0**:
   - Check if niches are published
   - Verify taxonomy terms exist
   - Check ACF relationship field configuration

## 🎉 Next Steps

1. **Set up ACF fields** using the configuration in `acf-fields-config.php`
2. **Create test niches** to verify functionality
3. **Test the filtering** with different combinations
4. **Customize styling** as needed
5. **Add more metrics** or fields as required

The niches module is now properly configured to fetch data from the database with dependency-based dropdown filtering! 