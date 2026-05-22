const sponsors = [
  {
    href: "https://stem.utah.gov/",
    img: "img/sponsors/stemactioncenter.png",
    alt: "STEM Action Center",
  },
  {
    href: "https://www.charlottepipe.com/",
    img: "img/sponsors/charlottepipeandfoundrycompany.png",
    alt: "Charlotte Pipe and Foundry",
  },
  {
    href: "https://www.leavitt.com/",
    img: "img/sponsors/leavittgroup.png",
    alt: "Leavitt Group",
  },
  {
    href: "https://www.bzi.com/",
    img: "img/sponsors/bzisteel.png",
    alt: "BZI Steel",
  },
  {
    href: "https://www.milfordmining.com/",
    img: "img/sponsors/milfordminingcompany.png",
    alt: "Milford Mining Company",
  },
  {
    href: "https://www.clarklinford.com/",
    img: "img/sponsors/clarklinford.png",
    alt: "Clark-Linford",
  },
  {
    href: "https://precisiondevelopmentinc.net/",
    img: "img/sponsors/precisiondevelopment.png",
    alt: "Precision Development",
  },
  {
    href: "https://www.ghaasfoundation.org/",
    img: "img/sponsors/genehaasfoundation.png",
    alt: "GHAAS Foundation",
  },
  {
    href: "https://www.leonsalignments.com/",
    img: "img/sponsors/leonsalignment.png",
    alt: "Leon's Alignments",
  },
  {
    href: "https://mountainwestcomputers.com/",
    img: "img/sponsors/mountainwestcomputers.png",
    alt: "Mountain West Computers",
  },
  {
    href: "https://bullochdrug.com/",
    img: "img/sponsors/bullochdrug.png",
    alt: "Bulloch Drug",
  },
  {
    href: "https://www.facebook.com/NogginGames/",
    img: "img/sponsors/noggingames.png",
    alt: "Noggin Games",
  },
  {
    href: "https://www.costco.com/",
    img: "img/sponsors/costco.png",
    alt: "Costco",
  },
  {
    href: "https://www.petsense.com/",
    img: "img/sponsors/petsense.png",
    alt: "PetSense",
  },
  {
    href: "https://www.southernutahvisioncare.com/",
    img: "img/sponsors/southernutahvisioncare.png",
    alt: "Southern Utah Vision Care",
  },
  {
    href: "https://www.naturalgrocers.com/",
    img: "img/sponsors/naturalgrocers.png",
    alt: "Natural Grocers",
  },
  {
    href: "https://cedarcitypizzacart.com/",
    img: "img/sponsors/pizzacart.png",
    alt: "Cedar City Pizza Cart",
  },
  {
    href: "https://www.wwbraces.com/",
    img: "img/sponsors/wilson.png",
    alt: "Wilson Orthodontics",
  },
  {
    href: "https://www.wecinc.com/",
    img: "img/sponsors/watsonengineering.png",
    alt: "Watson Engineering",
  },
  {
    href: "https://reliant.engineer/",
    img: "img/sponsors/reliantengineering.png",
    alt: "Reliant Engineering",
  },
  {
    href: "https://www.redpeakgym.com/",
    img: "img/sponsors/redpeakgym.png",
    alt: "Red Peak Gym",
  },
  {
    href: "https://www.imageproprint.com/",
    img: "img/sponsors/imagepro.png",
    alt: "Image Pro Print",
  },
  // Newest Sponsors (remove this and move it when adding more)
  {
    href: "https://safarihospitality.com/",
    img: "img/sponsors/hamptonInnLogo.png",
    alt: "Hampton Inn Logo",
  },
  {
    href: "https://imlayplumbing.com/",
    img: "img/sponsors/imlayplumbing.png",
    alt: "Imlay Plumbing",
  },
  {
    href: "https://cedarhealthandrehab.com/",
    img: "img/sponsors/cedarhealth.png",
    alt: "Cedar Health and Rehab",
  },
  {
    href: "https://circlecranchutah.com/",
    img: "img/sponsors/circlecranch.png",
    alt: "Circle C Ranch",
  },
  {
    href: "https://www.coalcreekmortgage.net/",
    img: "img/sponsors/coalcreekmortgage.png",
    alt: "Coal Creek Mortgage",
  },
  {
    href: "https://www.modernwoodmen.org/",
    img: "img/sponsors/modernwoodmen.png",
    alt: "Modern Woodmen",
  },
  {
    href: "https://www.laeng.com/",
    img: "img/sponsors/lamoureauxassociates.png",
    alt: "Lamoureaux Associates",
  }
];

const sponsorTrack = document.getElementById("sponsor-track");

if (sponsorTrack) {
  const createSponsorLink = ({ href, img, alt }) => {
    const link = document.createElement("a");
    link.className = "sponsor";
    link.href = href;
    link.target = "_blank";
    link.rel = "noopener noreferrer";

    const logo = document.createElement("img");
    logo.src = img;
    logo.alt = alt;

    link.appendChild(logo);
    return link;
  };

  const renderSponsorBlock = () => {
    sponsors.forEach((sponsor) => {
      sponsorTrack.appendChild(createSponsorLink(sponsor));
    });
  };

  // Duplicate the list for a looping scrolling track effect.
  renderSponsorBlock();
  renderSponsorBlock();
}
