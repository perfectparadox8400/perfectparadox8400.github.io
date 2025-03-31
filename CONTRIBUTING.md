# Team Website

#### [perfectparadox8400.github.io](https://perfectparadox8400.github.io/)

## website.json

The `website.json` file is a configuration file for the website. Below is a detailed explanation of its structure and how to edit it:

---

### 1. `name`
- **Purpose**: Specifies the name of the website or team.
- **Example**: `"Perfect Paradox 8400"`
- **How to Edit**: Change the value to update the website's name.

---

### 2. `logo`
- **Purpose**: Path to the website's logo image.
- **Example**: `"/img/logo.png"`
- **How to Edit**: Update the path to point to a different logo image.

---

### 3. `menu`
- **Purpose**: Defines the navigation menu structure.
- **Structure**:
  - `title`: The name of the menu item.
  - `url`: The link for the menu item. If `false`, it means the item has a dropdown (`subMenu`).
  - `subMenu`: A list of submenu items (optional).
    - `name`: Name of the submenu item.
    - `url`: Link for the submenu item.
    - `target`: (Optional) Specifies if the link opens in a new tab (`_blank`).

- **How to Edit**:
  - Add, remove, or modify `menu` items or `subMenu` items.
  - Example: Add a new menu item for "Blog":
    ```json
    {
      "title": "Blog",
      "url": "/blog"
    }
    ```

---

### 4. `home`
- **Purpose**: Defines the content for the homepage.
- **Structure**:
  - `team`: Path to the team image.
  - `title`: Main title for the homepage.
  - `subtitle`: Subtitle for the homepage.
  - `about`: Description of the team.

- **How to Edit**:
  - Update the `title`, `subtitle`, or `about` to reflect new information.
  - Change the `team` image path to update the homepage image.

---

### 5. `contact`
- **Purpose**: Contains contact information for the team.
- **Structure**:
  - `email`: Team's email address.
  - `phone`: Team's phone number.
  - `address`: Physical address with a link to a map.
  - `socials`: List of social media links.
    - `name`: Name of the platform.
    - `link`: URL to the platform.
    - `icon`: Icon class for the platform.

- **How to Edit**:
  - Update the `email`, `phone`, or `address` fields.
  - Add or remove social media links in the `socials` array.

---

### 6. `sponsors`
- **Purpose**: Displays sponsor information.
- **Structure**:
  - `title`: Title for the sponsors section.
  - `subtitle`: Subtitle for the sponsors section.
  - `nosponsor`: Message displayed if there are no sponsors.

- **How to Edit**:
  - Update the `title` or `subtitle` to change the section's text.
  - Modify the `nosponsor` message.

---

### 7. `footer`
- **Purpose**: Defines the footer content.
- **Structure**:
  - `updates`: Section for updates.
    - `title`: Title for the updates section.
    - `subtitle`: Subtitle for the updates section.
    - `image`: Path to an image for the updates section.
    - `link`: URL for more updates.
  - `links`: List of footer links.
    - `name`: Name of the link.
    - `url`: URL for the link.
  - `copyright`: Copyright text.

- **How to Edit**:
  - Update the `updates` section to reflect new information.
  - Add or remove links in the `links` array.
  - Modify the `copyright` text.

---

### Example Edits

#### Add a New Social Media Link
To add a new social media link for LinkedIn:
```json
{
  "name": "LinkedIn",
  "link": "https://www.linkedin.com/in/perfectparadox8400",
  "icon": "lineicons:linkedin-fill"
}
```
#### Add a New Menu Item

To add a new menu item for "Blog":
```json
{
  "title": "Blog",
  "url": "/blog"
}
```

## team.json

The `team.json` file is a configuration file for the team members.

### Team Member Structure
- **Role**: The role of the team member (e.g., Programming Captain, Team Member).
- **Description**: A brief description of the team member, including their interests, hobbies, or contributions to the team.
- **Image**: Path to the team member's image.

#### Example:
```json
{
  "name": "Name of the Team Member",
  "role": "Role of the Team Member",
  "description": "A brief description of the team member.",
  "image": "/path/to/image.jpg"
}
```
### sponsors.json

The `sponsors.json` file is a configuration file for the sponsors of the team.
### Sponsor Structure

- Title: The title of the sponsor group (e.g., "Our Partners", "Gold Sponsors").
- Sponsors: A list of sponsors in the group (optional).
  - Name: The name of the sponsor.
  - Logo: Path to the sponsor's logo image (optional).
  - URL: Link to the sponsor's website (optional).

#### Example:
```json
{
  "title": "Sponsor Group Name",
  "sponsors": [
    {
      "name": "Sponsor Name",
      "logo": "/path/to/logo.png",
      "url": "https://www.sponsorwebsite.com"
    }
  ]
}
```
