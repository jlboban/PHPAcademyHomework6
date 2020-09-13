# PHPAcademyHomework5

### Preconditions

- GitHub profile

### Mandatory

**1.** Create class which has two `private` properties. Property values should be set at object creation 
and should be changeable later with `__get()` and `__set()` magic methods.

**Extra points:**
  - Make setting of the property values optional at object creation.
  - Don't set property value if property doesn't exist in the class.

**Note:**:
Don't use class or property names from the lecture.

**2.** Create class with `__call()` magic method that handles missing getters and setters. 

**For example:**

  - If someone calls `$obj->getFirstName()`, `__call()` should return firstname value from the `$data` property.
  - If someone calls `$obj->setLastName('Perić')`, `__call()` should set value of lastname in the `$data` property.
  - If someone calls method with a different prefix than: **get, set, has, uns**, `__call()` should throw an Exception.

**Extra points:**

  - If someone calls `$obj->hasAge()`, `__call()` should return `true` if age value exist in the `$data` property 
  and `false` otherwise.
  - If someone calls `$obj->unsAddress()`, `__call()` should remove address value from the `$data` property.

**Note:**
  - `$data` property should be an associative array.
  - firstname, lastname, age, and address are just examples, someone should be able to call
  any getter or setter on that class.
