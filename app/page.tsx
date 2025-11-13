import HeroSection from '@/components/HeroSection';
import VideoSection from '@/components/VideoSection';
import QuickAccessCards from '@/components/QuickAccessCards';
import RestaurantTypes from '@/components/RestaurantTypes';
import SystemFeatures from '@/components/SystemFeatures';
import DetailSections from '@/components/DetailSections';

export default function Home() {
  return (
    <div className="animate-fade-in">
      {/* Hero Section */}
      <HeroSection />

      {/* Video Section */}
      <VideoSection />

      {/* Quick Access Cards */}
      <QuickAccessCards />

      {/* Divider */}
      <div className="section-divider"></div>

      {/* Restaurant Types */}
      <RestaurantTypes />

      {/* Divider */}
      <div className="section-divider"></div>

      {/* System Features */}
      <SystemFeatures />

      {/* Divider */}
      <div className="section-divider"></div>

      {/* Detail Sections */}
      <DetailSections />
    </div>
  );
}
