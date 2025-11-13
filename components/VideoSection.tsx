'use client';

export default function VideoSection() {
  return (
    <section className="container-thai py-12">
      <div className="card-pottery p-4">
        <div className="relative w-full" style={{ paddingBottom: '56.25%' }}>
          <iframe
            className="absolute top-0 left-0 w-full h-full rounded-lg"
            src="https://www.youtube-nocookie.com/embed/HRd3ZtZNQKY?autoplay=1&loop=1&mute=1&playlist=HRd3ZtZNQKY&controls=0&modestbranding=1"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture; fullscreen"
            allowFullScreen
          ></iframe>
        </div>
      </div>
    </section>
  );
}
